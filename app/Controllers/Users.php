<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function __construct()
    {
        // Curl Request Config
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://localhost:3000/api/v1/',
        ]);

        // Get session data

    }

    public function index()
    {
        //
    }
}
