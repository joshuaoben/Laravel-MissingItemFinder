<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLogin(){
    	$title = "login";
    	$label = "User Login";
    	return view('user.user-login', compact('title', 'label'));
    }

    public function login(){
    	$title = "login";
    	$label = "Lol. Not Logged in Yet";
    	return view('user.user-login', compact('title', 'label'));
    }

    public function showRegister(){
    	$title = "Register";
    	$label = "User Register";
    	return view('user.user-register', compact('title', 'label'));
    }

    public function register(){
    	$title = "Register";
    	$label = "Lol. Not Registered Yet";
    	return view('user.user-register', compact('title', 'label'));
    }


}
