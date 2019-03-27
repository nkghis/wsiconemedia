<?php

namespace App\Http\Controllers;

use App\Campagne;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CampagneController extends Controller
{
    public function index()
    {
        $campagne = Campagne::all();
        return response()->json($campagne);
    }

    public function store(Request $request, Campagne $campagne)
    {
      //$campagne = Campagne::create($request->all());
        $campagne->libelle = $request->input('libelle');
        $campagne->DP_Campagne = $request->input('DP_Campagne');
        $campagne->FP_Campagne = $request->input('FP_Campagne');
        $campagne->Code_Pays = $request->input('Code_Pays');
        $campagne->Etat_Campagne = $request->input('Etat_Campagne');
        $campagne->Duree_Camp = $request->input('Duree_Camp');
        $campagne->Code_Client = $request->input('Code_Client');
        $campagne->Code_Produit = $request->input('Code_Produit');
        $campagne->Code_Marque = $request->input('Code_Marque');
        $campagne->save();
        return response()->json('campagne ajoutée');
    }

    public function show($id)
    {
        $campagne = Campagne::find($id);

        if (!$campagne)
        {
            return response()->json('Désolé campagne non trouvée',404);
        }
        return response()->json($campagne);
    }

    public function create()
    {
    //
    }

    public function update($id, Request $request)
    {
        $campagne = Campagne::find($id);

        if(!$campagne)
        {
            return response()->json('Désolé campagne non trouvée', 404);
        }

        $campagne->libelle = $request->input('libelle');
        $campagne->DP_Campagne = $request->input('DP_Campagne');
        $campagne->FP_Campagne = $request->input('FP_Campagne');
        $campagne->Code_Pays = $request->input('Code_Pays');
        $campagne->Etat_Campagne = $request->input('Etat_Campagne');
        $campagne->Duree_Camp = $request->input('Duree_Camp');
        $campagne->Code_Client = $request->input('Code_Client');
        $campagne->Code_Produit = $request->input('Code_Produit');
        $campagne->Code_Marque = $request->input('Code_Marque');
        $campagne->save();
        return response()->json('campagne mis à jour');
    }

    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        $campagnes = Campagne::find($id);

        if (!$campagnes)
        {
            return response()->json('Désolé campagne non trouvée - suppression impossible', 404);
        }

        $campagne = Campagne::destroy($id);
        return response()->json('campagne supprimé');
    }

}
