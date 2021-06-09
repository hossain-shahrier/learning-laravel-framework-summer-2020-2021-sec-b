<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    //
    public function index()
    {
    }
    public function editUser($id)
    {
    }
    public function createUserIndex()
    {
        return view('users.createUserIndex');
    }
    public function createUser(Request $req)
    {
        $users = [
            [1, 'al-amin', 'alamin@gmail.com'],
            [2, 'Zobayer', 'Zobayer@gmail.com'],
            [3, 'Zannat', 'Zannat@gmail.com'],
            [4, 'Zaker', 'Zaker@gmail.com']
        ];
        $user = [$req->id, $req->uname, $req->email];
        array_push($users, $user);
        return view('users.index')->with('userslist', $users);
    }
}
