<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return Inertia::render('Blog/Index',[
            'posts' => Blog::with('postCategory', 'postAuthor')->get(),
            'url' => url('storage/'),
            'lastPost' => Blog::with('postAuthor')->orderBy('created_at', 'desc')->first(),
        ]);
    }

    public function show($slug)
    {
        $post = Blog::findOrFail($slug);
        return Inertia::render('Blog/Show', [
            'post' =>  [
                'id' => $post->id,
                'title' => $post->title,
                'slug' => $post->slug,
                'subtitle' => $post->subtitle,
                'post_content' => $post->post_content,
                'author' => $post->postAuthor->only('name'),
                'category' => $post->postCategory ? $post->postCategory->only('name') : null,
                'post_cover' => asset('storage/'.$post->post_cover),
                'created_at' => $post->created_at,
            ],
        ]);
    }
}
