<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return Inertia::render('Blog/Index',[
            'lastPost' => Blog::with('postAuthor')->latest()->first(),
            'posts' => Blog::with('postCategory', 'postAuthor')->get(),
            'url' => url('storage/'),
        ]);
    }

    /* @param \App\Models\Blog $slug
     * @returns \Illuminate\Http\Response
     */

    public function show($slug)
    {
        $slug = Blog::where('slug', $slug)->with(['postCategory', 'postAuthor'])->first();

        return Inertia::render('Blog/Show', [
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
