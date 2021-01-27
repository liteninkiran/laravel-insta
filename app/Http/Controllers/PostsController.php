<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function store(Request $request)
    {
        // Store request data
        $data = $request->validate(
        [
            'caption' => 'required',
            'image' => 'required|image',
        ]);

        // Store image
        $imagePath = $request->image->store('uploads', 'public');

        // Resize with "Intervention"
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);

        // Save image
        $image->save();

        // Update the data array with the correct path
        $data['image'] = $imagePath;

        // Store post
        auth()->user()->posts()->create($data);

        // Redirect to user profile
        return redirect('/profile/' . auth()->user()->id);
    }

}
