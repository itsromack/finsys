<?php

namespace ERC\Http\Controllers;

use Illuminate\Http\Request;
use ERC\Client;
use ERC\Http\Requests\ClientRequest;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients', compact(
            'clients'
        ));
    }

    public function api_list()
    {
        $clients = Client::all();
        return response()->json([
            'success' => true,
            'clients' => $clients
        ]);
    }

    public function api_get($id)
    {
        $client = Client::find($id);
        if (!is_null($client))
        {
            return response()->json([
                'success' => true,
                'client' => $client->toArray()
            ]);
        }
        return response()->json([
            'success' => false
        ]);
    }

    public function api_new(Request $request)
    {
        return response()->json([
            'success' => true
        ]);
    }

    public function api_update(Request $request)
    {
        return response()->json([
            'success' => true
        ]);
    }

    public function show($id)
    {
        $client = Client::find($id);
        if (!is_null($client))
        {
            return view('client', compact(
                'client'
            ));
        }

        return redirect()->route('list_clients');        
    }

    /**
     * Shows the new client form
     */
    public function create()
    {
        return true;
    }

    /**
     * Saves the client
     */
    public function save(ClientRequest $request)
    {
        return true;
    }

    /**
     * Updates the client
     */
    public function update(ClientRequest $request)
    {
        $data = $request->all();
        $client_id = $data['client_id'];
        unset($data['client_id']);
        unset($data['_token']);
        $client = Client::find($client_id);
        if (!is_null($client))
        {
            $client->fill($data);
            if ($client->save())
            {
                return redirect('/clients/' . $client_id)
                        ->with('flash_message', 'Successfully updated client information');
            }
        }
        return redirect('/clients/' . $client_id)
                ->with('flash_message', 'Successfully updated client information');
    }

}
