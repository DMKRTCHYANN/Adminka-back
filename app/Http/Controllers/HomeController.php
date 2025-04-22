<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $buildings = Building::query()->get();

        return view('index', [
            'buildings' => $buildings
        ]);
    }

    public function show($id)
    {
        $building = Building::query()->findOrFail($id);
        $images = Image::query()->where('building_id', $building->id)->get();

        return view('show', [
            'building' => $building,
            'images' => $images,
        ]);
    }
}
