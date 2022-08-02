<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarteController extends Controller
{
    public function index()
    {
        return view('carte.index');
    }

    public function create()
    {
        return view('carte.create');
    }
}
