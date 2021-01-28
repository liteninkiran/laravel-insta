<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', ['user' => $user]);
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request)
    {
        $this->authorize('update', $user->profile);

        // Store the data
        $data = $request->validate(
        [
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        // Update profile
        if(auth()->user())
        {
            if($request->image)
            {
                // Store image
                $imagePath = $request->image->store('storage', 'public');

                // Resize with "Intervention"
                $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);

                // Save image
                $image->save();

                // Update the data array with the correct path
                $data['image'] = $imagePath;
            }

            auth()->user()->profile()->update($data);
        }

        // Return to profile view page
        return redirect(route('profile.show', $user));
    }
}
