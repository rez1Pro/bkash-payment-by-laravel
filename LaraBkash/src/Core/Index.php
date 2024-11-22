<?php

namespace Rez1pro\LaraBkash\Core;

use GuzzleHttp\Client;

class Index
{

    protected $response;
    protected $client;
    public function __construct()
    {
        $this->client = new Client();
        $response = $this->client->request('POST', config('lara-bkash.base_url') . '/tokenized/checkout/token/grant', [
            'json' => [
                'app_key' => config('lara-bkash.app_key'),
                'app_secret' => config('lara-bkash.app_secret'),
            ],
            'headers' => [
                'accept' => 'application/json',
                'content-type' => 'application/json',
                'username' => config('lara-bkash.username'),
                'password' => config('lara-bkash.password'),
            ],
        ]);
        $this->response = json_decode($response->getBody()->getContents());
    }

    public function checkout($amount, $orderId)
    {

        $response = $this->client->request('POST', config('lara-bkash.base_url') . '/checkout/payment/create', [
            'json' => [
                'amount' => $amount,
                'currency' => config('lara-bkash.currency'),
                'intent' => 'authorization',
                'merchantInvoiceNumber' => $orderId,
                // 'merchantAssociationInfo' => $orderId
            ],
            'headers' => [
                'Authorization' => 'Bearer ' . $this->response->id_token,
                'X-APP-Key' => config('lara-bkash.app_key'),
                'accept' => 'application/json',
                'content-type' => 'application/json',
            ],
        ]);

        return $response->getBody();
    }
}
