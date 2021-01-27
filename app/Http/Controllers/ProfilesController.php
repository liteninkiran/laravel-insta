<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($userName)
    {
        $user = User::findOrFail($userName);
        return view('home', ['user' => $user]);
    }
}
