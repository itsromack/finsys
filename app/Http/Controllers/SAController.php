<?php

namespace ERC\Http\Controllers;

use Illuminate\Http\Request;

class SAController extends Controller
{
    public function api_list()
    {
        $data = []
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function api_get($id)
    {
        $faker = Faker\Factory::create();
        $data = [
        ];
        if (!is_null($client))
        {
            return response()->json([
                'success' => true,
                'sa' => $data
            ]);
        }
        return response()->json([
            'success' => false
        ]);
    }

    public function api_new(Request $request)
    {
        return response()->json([
            'success' => true
        ]);
    }

    public function api_update(Request $request)
    {
        return response()->json([
            'success' => true
        ]);
    }
}
