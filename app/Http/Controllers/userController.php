<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class userController extends Controller
{
    public function fetchInsert(){
        $response = Http::get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');
        $users = $response['users'];
        
        foreach ($users as $u) {
        $user=new UserApi();
            $user->id=$u['id'];
            $user->name=$u['name'];
            $user->age=$u['age'];
            $user->email=$u['email'];
            $user->save();

        }
        return "Data fetched and saved.";
    }
    public function show(){
        return view('user', ['users' => DB::table('user_apis')->paginate(10)]);
    }

}

