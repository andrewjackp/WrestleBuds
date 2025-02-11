<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    public function create(): View
    {
        return view('post.create');
    }
 
    /**
     * Store a new blog post.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate and store the blog post...
 
        $validated = $request->validate([
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',

    ]);
        dd($validated);
        return redirect('/posts');
    }
}
