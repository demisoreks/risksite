<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class API extends Controller
{
    public static function getStates() {
        $base_url = config('var.api_base_url');
        $client = new Client();
        $response = $client->request('GET', $base_url.'states');
        $body = $response->getBody()->getContents();
        return $body;
    }
    
    public static function getState($id) {
        $base_url = config('var.api_base_url');
        $client = new Client();
        $response = $client->request('GET', $base_url.'states/'.$id);
        $body = $response->getBody()->getContents();
        return $body;
    }
}
