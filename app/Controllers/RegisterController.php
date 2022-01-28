<?php
namespace App\Controllers;

use App\Models\User;
use MasoudMVC\Support\Hash;
use MasoudMVC\Validation\Validator;

class RegisterController
{
    public function login()
    {
        $v = new Validator();
        $v->setRules([
            'username' => 'required|alnum|between:6,32',
            'password' => 'required|alnum|between:6,64',
        ]);

        $v->make(request()->all());

        if (!$v->passes()) {
            app()->session->setFlash('error', 'Login has error');
            app()->session->setFlash('errors', $v->errors());
            app()->session->setFlash('old', request()->all());

            return back();
        }

        $user = User::where('username', '=', request('username'))->find();
        if (!$user) {
            app()->session->setFlash('error', 'Username not found');
            app()->session->setFlash('errors', $v->errors());
            app()->session->setFlash('old', request()->all());

            return back();
        }
        if (!Hash::verify(request('password'), $user->password)) {
            app()->session->setFlash('error', 'Password is wrong');
            app()->session->setFlash('errors', $v->errors());
            app()->session->setFlash('old', request()->all());

            return back();
        }

        app()->session->setFlash('success', 'Login Successfully');

        app()->session->set('auth_user', $user->id);

        return back();
    }

    public function register()
    {
        $v = new Validator();
        $v->setRules([
            'fullname' => 'required|between:8,32',
            'username' => 'required|alnum|between:6,32|unique:users,username',
            'country' => 'required|between:3,32',
            'password' => 'required|alnum|between:6,64|confirmed',
            'password_confirmation' => 'required|alnum|between:6,64',
        ]);

        $v->setAliases([
            'password_confirmation' => 'Password Confirmation'
        ]);

        $v->make(request()->all());

        if (!$v->passes()) {
            app()->session->setFlash('error', 'Register has error');
            app()->session->setFlash('errors', $v->errors());
            app()->session->setFlash('old', request()->all());

            return back();
        }

        $lastUserId = User::create([
            'fullname' => request('fullname'),
            'username' => request('username'),
            'country' => request('country'),
            'password' => bcrypt(request('password')),
            'join_date' => date('Y-m-d H:i:s'),
        ]);

        app()->session->setFlash('success', 'Register Successfully');

        app()->session->set('auth_user', $lastUserId);

        return back();
    }

    public function logout()
    {
        if (isLogin()) {
            app()->session->remove('auth_user');
        }
        return back();
    }
}