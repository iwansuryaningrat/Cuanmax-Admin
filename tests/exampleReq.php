<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://localhost:3000/api/v1/',
        ]);
    }
    public function index()
    {
        $result = $this->client->get('cryptocurrency/latest');
        $data = json_decode($result->getBody(), true);
        $status = $result->getStatusCode();

        dd($status, $data);
    }
}
