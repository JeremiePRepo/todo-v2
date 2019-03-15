<?php

// On utilise le typage strict
declare(strict_types=1);

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Ponderator;

class PonderatorsController extends Controller
{
    /**
     * Affiche la liste des pondérateurs.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $ponderators = Ponderator::all();

        return view('pages/ponderators', compact('ponderators'));
    }

    /**
     * Traite le formulaire d'ajout d'un pondérateur.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        Ponderator::create(
            request()->validate([
                'name'       => 'required|min:3|max:255',
                'coeficient' => 'required|integer',
            ])
        );

        return redirect('/ponderators');
    }

    /**
     * Affiche la page de création d'un pondérateur'.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('pages/ponderators/create');
    }

    /**
     * Affiche un pondérateur.
     *
     * @param Ponderator $ponderator
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show(Ponderator $ponderator)
    {
        return view('pages/ponderators/show', compact('ponderator'));
    }

    /**
     * Traite le formulaire d'édition de pondérateur.
     *
     * @param Ponderator $ponderator
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function update(Ponderator $ponderator)
    {
        $ponderator->update(
            request()->validate([
                'name'       => 'required|min:3|max:255',
                'coeficient' => 'required|integer',
            ])
        );

        return redirect('/ponderators');
    }

    /**
     * Supprime un pondérateur.
     *
     * @param Ponderator $ponderator
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function destroy(Ponderator $ponderator)
    {
        $ponderator->delete();

        return redirect('/ponderators');
    }

    /**
     * Affiche la page d'édition d'un pondérateur.
     *
     * @param Ponderator $ponderator
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Ponderator $ponderator)
    {
        return view('pages/ponderators/edit', compact('ponderator'));
    }
}
