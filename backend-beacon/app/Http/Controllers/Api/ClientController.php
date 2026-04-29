<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * GET /api/v1/clients
     */
    public function index()
    {
        $clients = Client::active()
            ->get()
            ->map(fn ($c) => [
                'id' => $c->id,
                'name' => $c->name,
                'logo' => $c->logo ? asset('storage/' . $c->logo) : null,
                'website' => $c->website,
            ]);

        return response()->json($clients);
    }
}
