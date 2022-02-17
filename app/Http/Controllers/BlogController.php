<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return Inertia::render('Blog/Index');
    }

    public function show($id)
    {
//        return Inertia::render('Blog/Show', [
//            'post' => Blog::findOrFail($id)->with(['postAuthor', 'postCategory'])->get(),
//        ]);
        $post = Blog::findOrFail($id);
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
