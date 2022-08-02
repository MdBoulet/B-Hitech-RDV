<?php

namespace App\Http\Controllers;

use App\Acte;
use App\Carte;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $cartes = Carte::all();

        return view('admin.index', [
            'cartes' => $cartes
        ]);
    }

    public function showCarte($id)
    {
        $carte = Carte::where('id', $id)->first();

        return view('admin.carte.show', [
            'carte' => $carte
        ]);
    }

    public function acte()
    {
        $actes = Acte::all();

        return view('admin.acte.index', [
            'actes' => $actes
        ]);
    }
}
