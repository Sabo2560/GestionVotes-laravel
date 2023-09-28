<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class ElecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('electeur.ajoute');
    }


    public function listeVote()
    {
        $candidat = Candidat::all();

        return view('layouts.voter',compact('candidat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $electeur = Electeur::all();

        $electeur->nom = $request->nom;
        $electeur->prenom = $request->prenom;
        $electeur->dateNaissance = $request->dateNaissance;
        $electeur->cni = $request->cni;
        $electeur->candidat_id = $request->foreignId($candidat);

     $electeur->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
