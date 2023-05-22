<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Код для дій, доступних тільки аутентифікованим користувачам
        return view('welcome');
    }
}
