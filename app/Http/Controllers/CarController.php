<?php

namespace App\Http\Controllers;

use App\Enums\CarStatusEnum;
use App\Enums\CarTypeEnum;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return response()->json([
            'error' => false,
            'data' => $cars
        ]);
    }

    public function show($id)
    {
        $car = Car::find($id);
        if ($car) {
            return response()->json($car, 200);
        }
        return response()->json(['message' => 'Car not found'], 404);
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'price' => 'required|integer',
            'mileage' => 'required|integer',
            'condition' => ['required', Rule::in(array_column(CarTypeEnum::cases(), 'value'))],
            'status' => [Rule::in(array_column(CarStatusEnum::cases(), 'value'))],
        ]);

        $car = Car::create($request->all());

        return response()->json([
            'error' => false,
            'data' => $car
        ]);
    }

    public function update(Request $request, $id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                'error' => true,
                'message' => 'Car not found',
            ], 404);
        }

        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'price' => 'required|integer',
            'mileage' => 'required|integer',
            'condition' => ['required','in:new,used'],
            'status' => [Rule::in(array_column(CarStatusEnum::cases(), 'value'))],
        ]);

        $car->update($request->all());

        return response()->json([
            'error' => false,
            'data' =>  $car
        ]);
    }

    public function destroy($id)
    {
        $car = Car::find($id);

        if(!$car){
            return response()->json([
                'error' => true,
                'message' => 'Car not found'
            ], 404);
        }

        $car->delete();

        return response()->json([
            'error' => false,
            'message' => 'Car deleted successfully'
        ],200);
    }
}
