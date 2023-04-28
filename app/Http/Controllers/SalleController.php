<?php

namespace App\Http\Controllers;

use App\Models\salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //équivalent à "select * from salles"
         $resultats = Salle::all();         
         //demande d'affichage de la liste des salles à la vue
         return view('gestion.salles', ["lessalles" => $resultats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function show(salle $salle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function edit(salle $salle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salle $salle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function destroy(salle $salle)
    {
        //
    }
}
