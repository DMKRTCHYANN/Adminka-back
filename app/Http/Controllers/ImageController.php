<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::with('building')->get();
        return response()->json($images);
    }


    public function getBuildingImages($id)
    {
        $images = Image::where('building_id', $id)->get();

        return response()->json([
            'id' => $id,
            'images' => $images->map(function ($image) {
                return [
                    'id' => $image->id,
                    'url' => Storage::url($image->image),
                ];
            }),
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $image = Image::find($id);

        if (!$image) {
            return response()->json([
                'error' => true,
                'message' => 'Image not found'
            ], 404);
        }

        $image->delete();

        return response()->json([
            'error' => false,
            'message' => 'Image deleted successfully'
        ], 200);
    }




    public function store(Request $request)
    {
        $validated = $request->validate([
            'building_id' => 'required|exists:buildings,id',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePaths = [];

        foreach ($request->file('images') as $file) {
            $path = $file->store('images', 'public');
            $imagePaths[] = $path;

            Image::create([
                'building_id' => $validated['building_id'],
                'image' => $path,
            ]);
        }

        return response()->json([
            'message' => 'Images uploaded successfully.',
            'image_paths' => $imagePaths,
        ], 201);
    }
}
