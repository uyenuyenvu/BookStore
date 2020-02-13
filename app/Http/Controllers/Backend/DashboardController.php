<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
//        dd('hàm index trong dashboardController');
        $user=Auth::user();
        return view('dashboard')->with([
            'user'=>$user

        ]);
}
}
