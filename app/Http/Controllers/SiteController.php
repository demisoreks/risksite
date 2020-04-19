<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class SiteController extends Controller
{
    public function home() {
        $states = json_decode(API::getStates());
        $lockdown_status = [];
        $lockdown_color = [];
        $lockdown_color_h = [];
        foreach ($states as $state) {
            if ($state->lockdown_end) {
                $lockdown_end = Carbon::parse($state->lockdown_end)->format('l, F j, Y');
            } else {
                $lockdown_end = "Unknown";
            }
            if ($state->lockdown_status == "Total") {
                $lockdown_status[$state->id] = "Total Lockdown<br />Ends: ".$lockdown_end;
                $lockdown_color[$state->id] = "#FF0000";
                $lockdown_color_h[$state->id] = "#990000";
            } else if ($state->lockdown_status == "Partial") {
                $lockdown_status[$state->id] = "Partial Lockdown<br />Ends: ".$lockdown_end;
                $lockdown_color[$state->id] = "#FFA6A6";
                $lockdown_color_h[$state->id] = "#FF8484";
            } else {
                $lockdown_status[$state->id] = "No Lockdown";
                $lockdown_color[$state->id] = "#88A4BC";
                $lockdown_color_h[$state->id] = "#3B729F";
            }
        }
        
        return view('index', compact('states', 'lockdown_status', 'lockdown_color', 'lockdown_color_h'));
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
