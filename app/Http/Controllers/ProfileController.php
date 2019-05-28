<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function index($username)
    {
    	$user = User::where('username', $username)->first();
    	return view('home', compact('user'));
    }
}
