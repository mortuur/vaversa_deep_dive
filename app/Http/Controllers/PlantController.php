<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plants = Plant::all();
        return view('plants.index', ['plants' => $plants]);
    }
}
