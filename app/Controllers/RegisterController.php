<?php
namespace App\Controllers;

use App\Models\User;
use MasoudMVC\Validation\Validator;

class RegisterController
{
    public function index()
    {
        return view('auth.signup');
    }

    public function submit()
    {
        $v = new Validator();
        $v->setRules([
            'name' => 'required|between:8,32',
            'username' => 'required|alnum|between:8,32|unique:users,username',
            'email' => 'required|email|between:8,32|unique:users,email',
            'password' => 'required|alnum|between:6,64|confirmed',
            'password_confirmation' => 'required|alnum|between:6,64',
        ]);

        $v->setAliases([
            'password_confirmation' => 'Password Confirmation'
        ]);

        $v->make(request()->all());

        if (!$v->passes()) {
            app()->session->setFlash('errors', $v->errors());
            app()->session->setFlash('old', request()->all());

            return back();
        }

        User::create([
            'name' => request('name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        app()->session->setFlash('success', 'Register Successfully');

        return back();
    }
}