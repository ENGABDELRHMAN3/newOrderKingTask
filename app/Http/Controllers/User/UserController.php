<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    function index() {
        $UserData = auth()->user();
        return Inertia::render('User/Dashboard',['user'=>$UserData]);

    }
}
