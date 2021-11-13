<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() 
    {
        return view('register.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3'],
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|max:255'
        ]);

        //$attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        // log user in
        auth()->user($user);


        //session()->flash('success', 'Your account has been created.');

        return redirect('/')->with('success', 'Your account has been created.'); // redirects with flash
    }
}
