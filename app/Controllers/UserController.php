<?php
namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function getAllUsers()
    {
        // all records in database
        // var_dump(User::all());

        // all records with condition and select columns (default *)
        // var_dump(User::get(['username', 'LIKE', '%md%'], 'id, name'));

        // update
        // User::update(6, [
        //     'username' => 'mod',
        //     'email' => 'mod@mod.com',
        // ]);

        // delete
        User::delete(6);
    }
}