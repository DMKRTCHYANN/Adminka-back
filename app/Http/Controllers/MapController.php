<?php
//
//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//use App\Models\Building;
//
//class MapController extends Controller
//{
////    public function showMap()
////    {
////        return view('map');
////    }
//
//
//
//
//
//    public function getBuildings()
//    {
//        $buildings = Building::all(['id', 'title', 'short_description', 'bg_image', 'location']);
//
//        $data = $buildings->map(function ($building) {
//            return [
//                'id' => $building->id,
//                'title' => $building->title,
//                'short_description' => $building->short_description,
//                'bg_image' => $building->bg_image,
//                'location' => $building->location
//                    ? [
//                        'latitude' => $building->location->latitude,
//                        'longitude' => $building->location->longitude,
//                    ]
//                    : null,
//            ];
//        });
//
//        return response()->json($data);
//    }
//}


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;

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
}
