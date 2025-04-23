<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use Illuminate\Support\Facades\Http;

class MapController extends Controller
{
    public function showMap()
    {
        $buildings = Building::all(['id', 'title', 'short_description', 'bg_image', 'location']);

        $data = $buildings->map(function ($building) {
            return [
                'id' => $building->id,
                'title' => $building->title,
                'short_description' => $building->short_description,
                'bg_image' => $building->bg_image,
                'location' => $building->location
                    ? [
                        'latitude' => $building->location->latitude,
                        'longitude' => $building->location->longitude,
                    ]
                    : null,
            ];
        });

        return view('map', ['buildings' => $data]);
    }

    public function getAddress(Request $request)
    {
        $latitude = $request->query('latitude');
        $longitude = $request->query('longitude');

        if (!$latitude || !$longitude) {
            return response()->json(['error' => 'Coordinates are required'], 400);
        }

        $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json', [
            'latlng' => "$latitude,$longitude",
            'key' => 'AIzaSyDZrlzgVNXCPNCv-pGTjYN-Ic_DofQk8gE',
        ]);

        if ($response->successful()) {
            return response()->json($response->json());
        }

        return response()->json(['error' => 'Failed to fetch address'], 500);
    }
}
