<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request)
    {
        $data = $request->validate(
        [
            'title' => '',
            'description' => '',
            'url' => '',
            'image' => '',
        ]);

        dd($data);

        //return view('profiles.edit', ['user' => $user]);
    }
}
