<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trains = Train::all();
        return view('home.index', compact('trains'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Train $train)
    {
        //
    }

}
