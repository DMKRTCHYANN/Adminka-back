<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return response()->json([
            'error' => false,
            'data' => $clients
        ]);
    }

    public function show($id)
    {
        $client = Client::find($id);
        if ($client) {
            return response()->json($client, 200);
        }
        return response()->json(['message' => 'Client not found'], 404);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|phone:AM',
            'email' => 'required|email',
        ], [
            'phone.phone' => 'The :attribute should be a valid phone number for AM (Armenia)'
        ]);

        $client = Client::create($request->all());

        return response()->json([
            'error' => false,
            'data' => $client
        ]);
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);

        if (!$client) {
            return response()->json([
                'error' => true,
                'message' => 'Client not found'
            ], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|phone:AM',
            'email' => 'required|email',
        ], [
            'phone.phone' => 'The :attribute should be a valid phone number for AM (Armenia)'
        ]);


        $client->update($request->all());

        return response()->json([
            'error' => false,
            'data' => $client
        ]);
    }

    public function destroy($id)
    {
        $client = Client::find($id);

        if (!$client) {
            return response()->json([
                'error' => true,
                'message' => 'Client not found'
            ], 404);
        }

        $client->delete();

        return response()->json([
            'error' => false,
            'message' => 'Client deleted successfully'
        ], 200);
    }
}
