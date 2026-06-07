<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users')->get();
        // return $users;
        return view('allusers', ['data' => $users]);
    }

    public function singleUser($id){
        $user = DB::table('users')->where('id', $id)->get();
        return view('user', ['data' => $user]);
    }

    public function addUser(){
        $user = DB::table('users')->insertOrIgnore([
            'name' => 'Harsh Kumar',
            'email' => 'harsh.kumar@example.com',
            'age' => 21,
            'city' => 'Delhi',
            // 'created_at' => now(),
            // 'updated_at' => now()
        ]);

        if($user){
            return "User added successfully!";
        } else {
            return "Failed to add user.";
        }
    }

    public function updateUser(string $id){
        $updated = DB::table('users')->where('id', $id)->update([
            'name' => 'Harsh',
            'email' => 'Harsh@example.com',
            'age' => 23,
            'city' => 'Goa',
            'updated_at' => now()
        ]);
        if($updated){
            return "User updated successfully!";
        } else {
            return "Failed to update user.";
        }
    }


    public function deleteUser(string $id){
        $user = DB::table('users')->where('id', $id)->delete();
        if($user){
            return redirect()->route('users')->with('success', 'User deleted successfully!');
        } else {
            return "Failed to delete user.";
        }
    }


    public function addUserForm(Request $req){
        $user = DB::table('users')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'age' => $req->age,
            'city' => $req->city,
            // 'created_at' => now(),
            // 'updated_at' => now()
        ]);

        if($user){
            return redirect()->route('users')->with('success', 'User added successfully!');
        } else {
            return "Failed to add user.";
        }
    }

    public function updateUserForm(Request $req, string $id){
        if ($req->isMethod('post')) {
            $updated = DB::table('users')->where('id', $id)->update([
                'name' => $req->name,
                'email' => $req->email,
                'age' => $req->age,
                'city' => $req->city,
                'updated_at' => now()
            ]);

            if($updated){
                return redirect()->route('users')->with('success', 'User updated successfully!');
            }

            return redirect()->route('users')->with('success', 'No changes were made.');
        }

        // $user = DB::table('users')->where('id', $id)->get();
        $user = DB::table('users')->find($id);
        return view('updateUser', ['data' => $user]);

    }

}
