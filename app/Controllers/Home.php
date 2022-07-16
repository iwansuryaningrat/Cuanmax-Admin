<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        // Curl Request Config
        // $this->client = \Config\Services::curlrequest([
        //     'baseURI' => 'http://localhost:3000/api/v1/',
        // ]);

        // Get session data

    }

    public function index()
    {
        // $result = $this->client->get('cryptocurrency/info', [
        //     'query' => [
        //         'symbol' => 'BNB',
        //     ],
        // ]);
        // $data = json_decode($result->getBody(), true);
        // $status = $result->getStatusCode();

        // dd($status, $data);
        return view('index');
    }

    public function subscribers()
    {
        return view('subscribers');
    }
}
