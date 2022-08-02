<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActeBiometriqueController extends Controller
{
    public function index()
    {
        return view('acte.index');
    }

    public function create()
    {
        return view('acte.create');
    }
}
