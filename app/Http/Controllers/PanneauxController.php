<?php

namespace App\Http\Controllers;

use App\Panneaux;
use Illuminate\Http\Request;

class PanneauxController extends Controller
{
    public function index()
    {
        $panneau = Panneaux::all();

        return response()->json($panneau);
    }

    public function store(Request $request, Panneaux $panneau)
    {
        $panneau->emplacement = $request->input('emplacement');
        $panneau->partdevoix = $request->input('partdevoix');
        $panneau->latittude = $request->input('latittude');
        $panneau->longitude = $request->input('longitude');
        $panneau->image = $request->input('image');
        $panneau->idclient = $request->input('idclient');
        $panneau->idcampagne = $request->input('idcampagne');
        $panneau->idcommune = $request->input('idcommune');
        $panneau->idregie = $request->input('idregie');
        $panneau->save();
        return response()->json('panneau ajouté');
    }

    public function update($id, Request $request)
    {
        $panneau = Panneaux::find($id);

        if(!$panneau)
        {
            return response()->json('Désolé panneau non trouvée', 404);
        }

        $panneau->emplacement = $request->input('emplacement');
        $panneau->partdevoix = $request->input('partdevoix');
        $panneau->latittude = $request->input('latittude');
        $panneau->longitude = $request->input('longitude');
        $panneau->image = $request->input('image');
        $panneau->idclient = $request->input('idclient');
        $panneau->idcampagne = $request->input('idcampagne');
        $panneau->idcommune = $request->input('idcommune');
        $panneau->idregie = $request->input('idregie');
        $panneau->save();
        return response()->json('panneau mis à jour');
    }

    public function show($id)
    {
        $panneau = Panneaux::find($id);

        if (!$panneau)
        {
            return response()->json('Désolé panneau non trouvé',404);
        }

        return response()->json($panneau);
    }

    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        $panneaux = Panneaux::find($id);
        if (!$panneaux)
        {
            return response()->json('Désolé panneau non trouvé - suppression impossible',404);
        }
        $panneau = Panneaux::destroy($id);

        return response()->json('panneau supprimé');
    }
}
