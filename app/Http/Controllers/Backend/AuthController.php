<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\AuthController;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showFormLogin(){
        return view('login');
    }
}
