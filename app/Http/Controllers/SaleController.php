<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::all();

        return response()->json([
            'error' => false,
            'data' => $sales
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'client_id' => 'required|exists:clients,id',
            'sale_date' => 'required|date',
            'price' => 'required|numeric|min:0|max:99999999.99',
        ]);

        $sale = Sale::create($request->all());

        return response()->json([
            'error' => false,
            'data' => $sale
        ]);
    }

    public function show($id)
    {
        $car = Sale::find($id);
        if ($car) {
            return response()->json($car, 200);
        }
        return response()->json(['message' => 'Sales car not found'], 404);
    }

    public function update(Request $request,$id)
    {
        $sale = Sale::find($id);

        if(!$sale){
            return response()->json([
                'error' => true,
                'message' => 'Sales car not found'
            ],404);
        }

        $request->validate([
            'car_id' => 'required|exists:car_id',
            'client_id' => 'required|exists:client_id',
            'sale_date' => 'required|date',
            'price' => 'required|numeric|min:0|max:99999999.99'
        ]);

        $sale->update($request->all());

        return response()->json([
            'error' => false,
            'data' => $sale,
        ]);
    }


    public function destroy(Request $request,$id)
    {
        $sale = Sale::find($id);

        if (!$sale){
            return response()->json([
                'error' => true,
                'message' => 'Sale not found'
            ],404);
        }

        $sale->delete();

        return response()->json([
            'error' => false,
            'data' => 'Sale deleted successfully'
        ],200);
    }
}
