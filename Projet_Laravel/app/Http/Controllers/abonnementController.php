<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abonnement;
use App\Compteur;

class abonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonnement = Abonnement::all();

        return view('abonnement.index', compact('abonnement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compteurs = Compteur::pluck('numero','id');
       // dd($compteurs);
        return view('abonnement.create',compact('compteurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $zero = 0;
        $request->validate([
            'contrat'=>'required',
            'date'=>'required',
            'cumulnouv'=>'required',
            'compteur_id'=>'required'
        ]);
            $abonnement = new Abonnement();
            $abonnement->contrat= $request->get('contrat');
            $abonnement->date= $request->get('date');
            $abonnement->cumulanc= $zero;
            $abonnement->cumulnouv= $request->get('cumulnouv');
            $abonnement->compteur_id=  $request->get('compteur_id');




        $abonnement->save();
        return redirect('/abonnement')->with('reussi', 'abonnement enregistré!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abonnement = Abonnement::find($id);
        return view('abonnement.edit', compact('abonnement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'date'=>'required', 
            'cumulnouv'=>'required',
        ]);

        $abonnement = Abonnement::find($id);
        $abonnement->date= $request->date;
        $abonnement->cumulanc = $abonnement->cumulnouv;
        $abonnement->cumulnouv = $request->cumulnouv;
        $abonnement->save();

        return redirect('/abonnement')->with('reussi', 'Les renseignements de l\'abonnement sont mis à jour!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abonnement = Abonnement::find($id);
        $abonnement->delete();

        return redirect('/abonnement')->with('success', 'Abonnement deleted!');
    }
}
