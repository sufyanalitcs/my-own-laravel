<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class OwnerRezController extends Controller
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.ownerrez.com/api/v1',
            'headers' => [
                'X-API-Key' => env('OWNERREZ_API_KEY'),
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function fetchProperties()
    {
        try {
            $response = $this->client->get('/properties');
            $properties = json_decode($response->getBody(), true);

            return view('properties.index', compact('properties'));
        } catch (\Exception $e) {
        dd($e);
        }
    }

    // Add other methods to fetch different data as needed
}
