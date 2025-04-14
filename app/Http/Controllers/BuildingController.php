<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;
use MatanYadaev\EloquentSpatial\Objects\Point;

class BuildingController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('limit', 5);

        $buildings = Building::with('images');

        if ($request->input('order') === 'id') {
            $buildings->orderByDesc('id');
        } else {
            $buildings->sorted();
        }

        $paginatedBuildings = $buildings->paginate($perPage);

        return response()->json([
            'error' => false,
            'data' => $paginatedBuildings->items(),
            'totalPages' => $paginatedBuildings->lastPage(),
            'per_page' => $paginatedBuildings->perPage(),
            'to' => $paginatedBuildings->currentPage() * $paginatedBuildings->perPage(),
            'total' => $paginatedBuildings->total(),
        ]);
    }

    public function show($id)
    {
        $building = Building::find($id);

        if (!$building) {
            return response()->json(['message' => 'Building not found'], 404);
        }

        return response()->json($building, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $data = $request->only(['title', 'short_description', 'long_description']);

        if ($request->hasFile('bg_image')) {
            $data['bg_image'] = $this->handleImageUpload($request);
        }

        $data['location'] = new Point($request->input('latitude'), $request->input('longitude'));

        $building = Building::create($data);

        return response()->json([
            'error' => false,
            'data' => $building,
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $building = Building::find($id);

        if (!$building) {
            return response()->json(['error' => true, 'message' => 'Building not found'], 404);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $data = $request->only(['title', 'short_description', 'long_description']);

        if ($request->hasFile('bg_image')) {
            $data['bg_image'] = $this->handleImageUpload($request, $building->bg_image);
        }

        $data['location'] = new Point($request->input('latitude'), $request->input('longitude'));

        $building->update($data);

        return response()->json(['error' => false, 'data' => $building]);
    }

    public function destroy($id)
    {
        $building = Building::find($id);

        if (!$building) {
            return response()->json(['error' => true, 'message' => 'Building not found'], 404);
        }

        if ($building->bg_image) {
            \Storage::disk('public')->delete($building->bg_image);
        }

        $building->delete();

        return response()->json(['error' => false, 'message' => 'Building deleted successfully']);
    }

    private function handleImageUpload(Request $request, $existingImage = null)
    {
        if ($request->hasFile('bg_image')) {
            if ($existingImage) {
                \Storage::disk('public')->delete($existingImage);
            }
            return $request->file('bg_image')->store('images', 'public');
        }

        return $existingImage;
    }

    public function moveAfter($id, $positionEntityId)
    {
        $building = Building::findOrFail($id);
        $positionEntity = Building::findOrFail($positionEntityId);

        $building->moveAfter($positionEntity);

        return response()->json(['error' => false, 'building' => $building]);
    }

    public function moveBefore($id, $positionEntityId)
    {
        $building = Building::findOrFail($id);
        $positionEntity = Building::findOrFail($positionEntityId);

        $building->moveBefore($positionEntity);

        return response()->json(['error' => false]);
    }
}

