<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function index()
    {
        return Inertia::render('Front/Index');
    }

    public function blog()
    {
        return Inertia::render('Front/Blog',[
            'lastPost' => Blog::with('postAuthor')->latest()->first(),
            'posts' => Blog::with('postCategory', 'postAuthor')->get(),
            'url' => url('storage/'),
        ]);
    }

    /* @param \App\Models\Blog $slug
     * @returns \Illuminate\Http\Response
     */

    public function article($slug)
    {
        $slug = Blog::where('slug', $slug)->with(['postCategory', 'postAuthor'])->first();
        return Inertia::render('Front/Post', [
            'author' => Blog::with('postAuthor'),
            'category' => Blog::with('postCategory'),
            'post' =>  [
                'id' => $slug->id,
                'title' => $slug->title,
                'slug' => $slug->slug,
                'subtitle' => $slug->subtitle,
                'post_content' => $slug->post_content,
                'author' => $slug->postAuthor->only('name'),
                'category' => $slug->postCategory ? $slug->postCategory->only('name') : null,
                'post_cover' => asset('storage/'.$slug->post_cover),
                'created_at' => $slug->created_at,
            ],
        ]);
    }
}
