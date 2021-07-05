<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class DataController extends Controller
{
    public function show(Request $request)
    {
        $data = Data::all();

        return response()->json([
            'Data' => $data
        ], 200);
    }

}
