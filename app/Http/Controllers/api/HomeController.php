<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hello(){
        $users = User::all();
        foreach($users as $user){
            $user->email;
        }
        return response()->json([
            'success' => true,
            'users' => $users,
        ]);
    }
}
