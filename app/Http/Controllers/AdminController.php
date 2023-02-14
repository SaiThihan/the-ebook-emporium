<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // direct category list page
    function list(){
        return view('admin.caregory');
    }

    // direct user home page
    public function home(){
        return view('user.home');
    }

    // direct admin details page
    public function details(){
        return view('admin.account.details');
    }
}
