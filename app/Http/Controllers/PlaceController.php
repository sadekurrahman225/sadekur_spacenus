<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlaceController extends Controller
{

    public function index(Request $request)
    {
        $latitude = $request->input('lat');
        $longitude = $request->input('long');
        $radius = 5000;


        $apiKey = '';
        $url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=$latitude,$longitude&radius=$radius&key=$apiKey";

        $response = Http::get($url);

        if ($response->failed()) {
            return response()->json(['error' => 'Failed'], 500);
        }

        $places = $response->json()['results'];

        return response()->json(['places' => $places], 200);
    }
}
