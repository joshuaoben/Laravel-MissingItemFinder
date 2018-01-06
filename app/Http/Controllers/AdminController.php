<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateAdminRegData;

class AdminController extends Controller
{
    //

    public function showLogin(){
    	$label = "Admin Login";
    	return view('admin.admin_login', compact('label'));
    }

    public function showRegister(){
    	$label = "Admin Register";
    	return view('admin.admin_register', compact('label'));
    }

    public function register(ValidateAdminRegData $request){

    	$admin = Admin::create([
    		'firstname' => request('firstname'),
    		'lastname' => request('lastname'),
    		'email' => request('email'),
    		'password' => bcrypt(request('password'))
    	]);

    	$this->guard()-login($admin);

    	return redirect('/reports');
    }
}
