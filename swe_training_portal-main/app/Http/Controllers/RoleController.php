<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class RoleController extends Controller
{
    public function index(){

        $count = User::count();
        echo $count;




    }
}
