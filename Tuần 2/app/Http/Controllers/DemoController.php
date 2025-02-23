<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{

    public function Eloquent(){
        return User::all();
    }

    public function EagerLoading(){
        $user = User::with('posts')->get();
        return $user;
    }
    public function Cache(){
        $data =Cache::remember('key', 60, function () {
            return DB::table('tasks')->get();
        });
    }
}
