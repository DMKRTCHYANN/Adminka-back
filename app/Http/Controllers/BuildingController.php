<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Building;
//use Illuminate\Http\Request;
//
//class BuildingController extends Controller
//{
//    public function index()
//    {
//        $buildings = Building::with('images')->get();
//
//        return response()->json([
//            'error' => false,
//            'data' => $buildings,
//        ]);
//    }
//
//    public function show($id)
//    {
//        $building = Building::find($id);
//        if ($building) {
//            return response()->json($building, 200);
//        }
//        return response()->json(['message' => 'Building not found'], 404);
//    }
//
//
//    public function store(Request $request)
//    {
//        $request->validate([
//            'title' => 'required|string|max:255',
//            'short_description' => 'required|string',
//            'long_description' => 'required',
//            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//        ]);
//
//        $data = $request->only(['title', 'short_description', 'long_description']);
//
//        if ($request->file('bg_image')) {
//            $data['bg_image'] = $this->handleImageUpload($request);
//        }
//
//        $building = Building::create($data);
//
//        return response()->json([
//            'error' => false,
//            'data' => $building,
//        ], 201);
//    }
//
//    public function update(Request $request, $id)
//    {
//        $building = Building::find($id);
//
//        if (!$building) {
//            return response()->json([
//                'error' => true,
//                'message' => 'Building not found',
//            ], 404);
//        }
//
//        $request->validate([
//            'title' => 'required|string|max:255',
//            'short_description' => 'required|string',
//            'long_description' => 'required|string',
//            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//        ]);
//
//        $data = $request->only(['title', 'short_description', 'long_description']);
//
//        if ($request->hasFile('bg_image')) {
//            $data['bg_image'] = $this->handleImageUpload($request, $building->bg_image);
//        } else {
//            $data['bg_image'] = $building->bg_image;
//        }
//
//        $building->update($data);
//
//        return response()->json([
//            'error' => false,
//            'data' => $building,
//        ]);
//    }
//
//
//    public function destroy($id)
//    {
//        $building = Building::find($id);
//
//        if (!$building) {
//            return response()->json([
//                'error' => true,
//                'message' => 'Building not found',
//            ], 404);
//        }
//
//        if ($building->bg_image) {
//            \Storage::disk('public')->delete($building->bg_image);
//        }
//
//        $building->delete();
//
//        return response()->json([
//            'error' => false,
//            'message' => 'Building deleted successfully',
//        ], 200);
//    }
//
//    private function handleImageUpload(Request $request, $existingImage = null)
//    {
//        if ($request->hasFile('bg_image')) {
//            if ($existingImage) {
//                \Storage::disk('public')->delete($existingImage);
//            }
//            return $request->file('bg_image')->store('images', 'public');
//        }
//        return $existingImage;
//    }
//
//    public function a($id)
//    {
//        $building = Building::with('images')->find($id);
//
//        if (!$building) {
//            return response()->json([
//                'error' => true,
//                'message' => 'Building not found',
//            ], 404);
//        }
//
//        return response()->json([
//            'error' => false,
//            'building' => $building,
//        ]);
//    }
//}


namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{

    public function index(Request $request)
    {
        $perPage = $request->input('limit', 5);
        $buildings = Building::with('images')
            ->sorted()
            ->paginate($perPage);

        return response()->json([
            'error' => false,
            'data' => $buildings,
        ]);
    }

    public function show($id)
    {
        $building = Building::find($id);
        if ($building) {
            return response()->json($building, 200);
        }
        return response()->json(['message' => 'Building not found'], 404);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required',
            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['title', 'short_description', 'long_description']);

        if ($request->file('bg_image')) {
            $data['bg_image'] = $this->handleImageUpload($request);
        }

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
            return response()->json([
                'error' => true,
                'message' => 'Building not found',
            ], 404);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['title', 'short_description', 'long_description']);

        if ($request->hasFile('bg_image')) {
            $data['bg_image'] = $this->handleImageUpload($request, $building->bg_image);
        } else {
            $data['bg_image'] = $building->bg_image;
        }

        $building->update($data);

        return response()->json([
            'error' => false,
            'data' => $building,
        ]);
    }

    public function destroy($id)
    {
        $building = Building::find($id);

        if (!$building) {
            return response()->json([
                'error' => true,
                'message' => 'Building not found',
            ], 404);
        }

        if ($building->bg_image) {
            \Storage::disk('public')->delete($building->bg_image);
        }

        $building->delete();

        return response()->json([
            'error' => false,
            'message' => 'Building deleted successfully',
        ], 200);
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

    public function a($id)
    {
        $building = Building::with('images')->find($id);

        if (!$building) {
            return response()->json([
                'error' => true,
                'message' => 'Building not found',
            ], 404);
        }

        return response()->json([
            'error' => false,
            'building' => $building,
        ]);
    }

    public function moveAfter($id, $positionEntityId)
    {
        $building = Building::findOrFail($id);
        $positionEntity = Building::findOrFail($positionEntityId);

        $building->moveAfter($positionEntity);

        $buildings = Building::sorted()->get();

        return response()->json([
            'error' => false,
            'data' => $buildings,
            'message' => 'Building moved after successfully'
        ]);
    }


    public function moveDown($id)
    {
        $building = Building::findOrFail($id);

        if ($building->moveDown()) {
            $buildings = Building::sorted()->get();

            return response()->json([
                'error' => false,
                'data' => $buildings,
                'message' => 'Building moved down successfully'
            ]);
        }

        return response()->json([
            'error' => true,
            'message' => 'Building is already at the bottom'
        ], 400);
    }

    public function reorder(Request $request)
    {
        $request->validate([
            'order' => 'required|array',
            'order.*' => 'exists:buildings,id',
        ]);

        Building::setNewOrder($request->order);

        return response()->json([
            'error' => false,
            'message' => 'Buildings reordered successfully',
        ]);
    }
}
