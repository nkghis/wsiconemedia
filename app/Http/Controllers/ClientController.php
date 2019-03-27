<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $client = Client::all();
        return response()->json($client);
    }

    public function store(Request $request, Client $client)
    {
        $client->Raison_Soc = $request->input('Raison_Soc');
        $client->save();
        return response()->json('Client ajouté');
    }

    public function update($id, Request $request)
    {
        $client = Client::find($id);

        if(!$client)
        {
            return response()->json('Désolé client non trouvé', 404);
        }

        $client->Raison_Soc = $request->input('Raison_Soc');
        $client->save();
        return response()->json('client mis à jour');
    }

    public function show($id)
    {
        $client = Client::find($id);
        if (!$client)
        {
            return response()->json('Désolé client non trouvé', 404);
        }
        return response()->json($client);
    }

    public function edit($id)
    {

    }

    public function destroy($id)
    {
        $clients = Client::find($id);

        if (!$clients)
        {
            return response()->json('Désolé client non trouvé - suppression impossible', 404);
        }

        $client = Client::destroy($id);

        return response()->json('client supprimé');
    }
}
