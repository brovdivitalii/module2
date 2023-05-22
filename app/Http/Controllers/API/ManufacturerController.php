<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ManufacturerController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $manufacturers = Manufacturer::all();
        return response()->json($manufacturers);
    }


    public function getByCountry($country)
    {
        if (!Auth::check() || !in_array(Auth::user()->role, ['administrator', 'editor'])) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $manufacturers = Manufacturer::where('country', $country)->get();
        return response()->json($manufacturers);
    }

}
