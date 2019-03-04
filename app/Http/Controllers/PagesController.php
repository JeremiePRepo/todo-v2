<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Affiche la page d'accueil.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function homepage()
    {
        return view('pages/homepage');
    }
}
