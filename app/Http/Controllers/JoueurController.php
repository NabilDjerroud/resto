<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJoueurRequest;
use App\Models\Joueur;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    /**
     *  Affiche une liste des joueurs
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $nouveauJoueur = new Joueur();
        $joueurQuery = Joueur::query();
        $joueurs = $joueurQuery->get();
        return view("joueur.index", ["joueurs" => $joueurs, "title" => "Liste des joueurs"]);
    }

    /**
     *  Affiche le formulaire pour créer un nouveau joueur 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('joueur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJoueurRequest $request)
    {

        $joueur = new Joueur();
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->date_de_naissance = $request->date_de_naissance;
        $joueur->poste = $request->poste;
        $joueur->numero = $request->numero;

        if ($request->image) {

            $path = $request->image->store("joueurs", "public");
            $joueur->image = $path;
        }
        $joueur->save();

        return redirect()->route("joueur.index")->with("success", "Le joueur à été ajouté avec succès");

    }

    /**
     * Display the specified resource.
     * affiche un joueur spécifique
     */
    public function show(Joueur $joueur)
    {
        return view('joueur.joueur', ['joueur' => $joueur, "title" => $joueur->nom]);
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
