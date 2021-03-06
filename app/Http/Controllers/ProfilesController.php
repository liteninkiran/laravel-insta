<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cache;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        $postCount = Cache::remember
        (
            'count.posts.' . $user->id,
            now()->addSeconds(30),
            function() use ($user)
            {
                return $user->posts->count();
            }
        );

        $followersCount = Cache::remember
        (
            'count.followers.' . $user->id,
            now()->addSeconds(30),
            function() use ($user)
            {
                return $user->profile->followers->count();
            }
        );

        $followingCount = Cache::remember
        (
            'count.following.' . $user->id,
            now()->addSeconds(30),
            function() use ($user)
            {
                return $user->following->count();
            }
        );

        return view('profiles.index', compact('user', 'follows', 'postCount', 'followersCount', 'followingCount'));
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
            'url' => 'nullable|url',
            'image' => '',
        ]);

        // Update profile
        if(auth()->user())
        {
            if($request->image)
            {
                // Store image
                $imagePath = $request->image->store('profile', 'public');

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
