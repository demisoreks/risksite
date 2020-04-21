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
    
    public static function getIncidents($id) {
        $base_url = config('var.api_base_url');
        $client = new Client();
        $response = $client->request('GET', $base_url.'incidents/'.$id);
        $body = $response->getBody()->getContents();
        return $body;
    }
    
    public static function storeSubscriber(Request $request) {
        $base_url = config('var.api_base_url');
        $client = new Client();
        $response = $client->request('POST', $base_url.'subscribers/store', ['form_params' => ['name' => $request->name, 'email' => $request->email]]);
        $body = $response->getBody()->getContents();
        return $body;
    }
}
