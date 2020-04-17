<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
        return view('index');
    }
    
    public function policies() {
        return view('policies');
    }
    
    public function profile() {
        return view('profile');
    }
    
    public function states($id) {
        return view('states');
    }
}
