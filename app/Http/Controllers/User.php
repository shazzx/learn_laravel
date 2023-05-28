<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    // public function __construct(){
    //     $this->middleware('valid_user');
    // }
    public function show($id){
        $user = DB::select("SELECT * FROM users WHERE id = ?", [$id]);
        if(!$user){
            return 'no user found';
        }
        return $user;
    }
    public function createUser(Request $request){
        $username = $request->input('username');
        $count = 0;
        for($count; $count < 10; $count++){
        $user = DB::insert('insert into users (username) values (?)', [$username . $count]);
    }
    return $user;
}
}
