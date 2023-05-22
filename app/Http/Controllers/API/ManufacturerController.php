<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index()
    {
        $manufacturers = Manufacturer::all();
        return response()->json($manufacturers);
    }

    public function getByCountry($country)
    {
        $manufacturers = Manufacturer::where('country', $country)->get();
        return response()->json($manufacturers);
    }
}
