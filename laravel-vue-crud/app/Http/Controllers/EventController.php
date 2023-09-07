<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        // Logique pour afficher la liste des événements
    }

    public function show($id)
    {
        // Logique pour afficher un événement individuel
    }

    public function create()
    {
        return view('events.create'); // Affiche le formulaire de création d'événement
    }

    public function store(Request $request)
    {
        // Validez les données du formulaire
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
    
        // Enregistrez l'événement dans la base de données
        $event = Event::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            // Ajoutez d'autres champs si nécessaire
        ]);
    
        // Redirigez l'utilisateur vers une page de confirmation ou d'affichage de l'événement créé
        return redirect()->route('dashboard');
    }
    

    
}
