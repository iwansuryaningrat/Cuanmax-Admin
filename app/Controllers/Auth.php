<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
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
        return view('login');
    }

    public function login()
    {
        $client = \Config\Services::curlrequest();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $body = json_encode([
            'email' => $email,
            'password' => $password,
        ]);
        // dd($body);

        $result = $client->request('POST', 'http://localhost:3000/api/v1/login', [
            'headers' => [
                'User-Agent' => 'testing/1.0',
                'Accept'     => 'application/json',
                'X-Foo'      => ['Bar', 'Baz'],
            ],
            'body' => $body,
        ]);
        dd($result);
        // $data = json_decode($result->getBody(), true);
        // $status = $result->getStatusCode();
        // dd($status, $data);

        // if ($status == 200) {
        //     $this->session->set('token', $data['token']);
        //     return redirect()->to('/');
        // } else {
        //     return redirect()->to('/auth');
        // }
    }
}
