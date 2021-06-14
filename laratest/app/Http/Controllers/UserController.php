<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    //
    public function index()
    {
        $users = $this->getUserList();
        return view('user.list')->with('userlist', $users);
    }
    // user details
    public function details($id)
    {
        $users = $this->getUserList();
        $user = '';
        foreach ($users as $u) {
            if ($u[0] == $id) {
                $user = $u;
                break;
            }
        }
        return view('user.details')->with('user', $user);
    }
    // Create User
    public function create()
    {
        return view('user.create');
    }

    public function insert(Request $req)
    {
        $users = $this->getUserList();
        $user = [$req->id, $req->uname, $req->email];
        array_push($users, $user);
        return view('user.list')->with('userlist', $users);
    }

    // Edit User
    public function edit($id)
    {
        //find user by id from user list $user
        $users = $this->getUserList();
        $user = '';
        foreach ($users as $u) {
            if ($u[0] == $id) {
                $user = $u;
                break;
            }
        }

        return view('user.edit')->with('user', $user);
    }

    public function update(Request $req, $id)
    {
        //craete new user array & add to list
        //new userList

        $users = $this->getUserList();
        $user = [$req->id, $req->uname, $req->email];
        array_push($users, $user);
        return view('user.list')->with('userlist', $users);
    }

    // Delete and Destroy User
    public function delete($id)
    {
        //confirm window
        //find user by id $user
        $users = $this->getUserList();
        $user = '';
        foreach ($users as $u) {
            if ($u['id'] == $id) {
                $user = $u;
                break;
            }
        }
        return view('user.delete')->with('user', $user);
    }

    public function destroy($id)
    {
        //remove user form list
        //create new list & display

        // return view('user.list')->with('userList', $users);
    }

    // Global UserList
    public function getUserList()
    {
        return   [
            [1, 'al-amin', 'alamin@gmail.com'],
            [2, 'Zobayer', 'Zobayer@gmail.com'],
            [3, 'Zannat', 'Zannat@gmail.com'],
            [4, 'Zaker', 'Zaker@gmail.com']
        ];
    }
}
