<?php


namespace App\Services;

use GuzzleHttp\Client;

class OwnerRezService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('ownerrez.api_base_url'),
            'headers' => [
                'X-API-Key' => config('ownerrez.api_key'),
                'Content-Type' => 'application/json',
                // Add other headers as needed
            ],
        ]);
    }

    public function createGuest($data)
    {
        try {
            $response = $this->client->post('/guests', [
                'json' => $data,
            ]);
            
            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            // Handle exceptions here
            // For example, log the error and return null
            \Log::error('Error creating guest: ' . $e->getMessage());
            return null;
        }
    }

    // Add other methods for different API endpoints as needed
}
