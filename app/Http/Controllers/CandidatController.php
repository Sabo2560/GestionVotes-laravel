<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('candidat.ajouter');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function liste()
    {
        $candidat = Candidat::all();

        return view('candidat.liste',compact('candidat'));
    }
    public function listeVote()
    {
        $candidat = Candidat::all();

        return view('candidat.voter',compact('candidat'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $candidat = new Candidat();

            $candidat->nom = $request->nom;
            $candidat->prenom = $request->prenom;
            $candidat->dateNaissance = $request->dateNaissance;
            $candidat->parti = $request->parti;
            $candidat->paysNaissance = $request->paysNaissance;

         $candidat->save();
            return redirect()->back()->with('success','Candidat Inscris !');
    

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

        $candidat = candidat::find($id);

        return view('candidat.editer',compact('candidat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $candidat = candidat::find($id);

            $candidat->nom = $request->nom;
            $candidat->prenom = $request->prenom;
            $candidat->dateNaissance = $request->dateNaissance;
            $candidat->parti = $request->parti;
            $candidat->paysNaissance = $request->paysNaissance;

            $candidat->update();
            return redirect()->back()->with('success','Candidat Modifier !');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
