<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect;
use Carbon\Carbon;

class SiteController extends Controller
{
    public function home() {
        $states = json_decode(API::getStates());
        $lockdown_status = [];
        $lockdown_color = [];
        $lockdown_color_h = [];
        $total_count = 0;
        $partial_count = 0;
        $none_count = 0;
        foreach ($states as $state) {
            if ($state->lockdown_end) {
                $lockdown_end = Carbon::parse($state->lockdown_end)->format('l, F j, Y');
            } else {
                $lockdown_end = "Unknown";
            }
            if ($state->lockdown_status == "Total") {
                $lockdown_status[$state->id] = "Lockdown<br />Ends: ".$lockdown_end."<br />Confirmed COVID-19 Cases: ".number_format($state->covid_count, 0);
                $lockdown_color[$state->id] = "#FF0000";
                $lockdown_color_h[$state->id] = "#990000";
                $total_count ++;
            } else if ($state->lockdown_status == "Partial") {
                $lockdown_status[$state->id] = "Partial Lockdown<br />Ends: ".$lockdown_end."<br />Confirmed COVID-19 Cases: ".number_format($state->covid_count, 0);
                $lockdown_color[$state->id] = "#FFA6A6";
                $lockdown_color_h[$state->id] = "#FF8484";
                $partial_count ++;
            } else {
                $lockdown_status[$state->id] = "No Lockdown<br />Confirmed COVID-19 Cases: ".number_format($state->covid_count, 0);
                $lockdown_color[$state->id] = "#88A4BC";
                $lockdown_color_h[$state->id] = "#3B729F";
                $none_count ++;
            }
        }
        
        return view('index', compact('states', 'lockdown_status', 'lockdown_color', 'lockdown_color_h', 'total_count', 'partial_count', 'none_count'));
    }
    
    public function travel() {
        return view('travel');
    }
    
    public function profile() {
        $states = json_decode(API::getStates());
        $risk_rating = [];
        $risk_color = [];
        $risk_color_h = [];
        foreach ($states as $state) {
            $rating = "Unknown";
            if ($state->risk_rating) {
                $rating = $state->risk_rating;
            }
            $risk_rating[$state->id] = "Risk Rating: ".$rating;
            if ($state->risk_rating == "High") {
                $risk_color[$state->id] = "#FF0000";
                $risk_color_h[$state->id] = "#990000";
            } else if ($state->risk_rating == "Medium") {
                $risk_color[$state->id] = "#FF9900";
                $risk_color_h[$state->id] = "#FF6600";
            } else if ($state->risk_rating == "Low") {
                $risk_color[$state->id] = "#00CC00";
                $risk_color_h[$state->id] = "#006600";
            } else {
                $risk_color[$state->id] = "#88A4BC";
                $risk_color_h[$state->id] = "#3B729F";
            }
        }
        
        return view('profile', compact('states', 'risk_rating', 'risk_color', 'risk_color_h'));
    }
    
    public function states($id) {
        $state = json_decode(API::getState($id));
        $incidents = json_decode(API::getIncidents($id));
        return view('states', compact('state', 'incidents'));
    }
    
    public function subscribe(Request $request) {
        $feedback = json_decode(API::storeSubscriber($request));
        $response = $feedback->response;
        if ($response->code == '00') {
            return Redirect::back()
                    ->with('success', 'Thank you for subscribing!');
        } else {
            return Redirect::back()
                    ->with('error', 'Unknown error!');
        }
    }
    
    public function privacy() {
        return view('privacy');
    }
}
