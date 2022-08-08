<?php

namespace App\Controllers;

use App\Controllers\BaseController;

// Use Session at CodeIgniter
use \CodeIgniter\Session\Session;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->baseURL = 'http://localhost:3000/api/v1/';
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
            'email' => 'iwan.suryaningrat28@gmail.com',
            'password' => 'Undip.jaya123',
        ]);

        try {
            $result = $client->setBody($body)->request('POST', $this->baseURL . 'login', [
                'headers' => [
                    'User-Agent'       => 'testing/1.0',
                    'Content-Type'     => 'application/json',
                    'Accept'           => '*/*',
                    'Connection'       => 'keep-alive',
                    'Accept-Encoding'  => 'gzip, deflate, br'
                ],
                'http_errors' => false
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }

        $data = json_decode($result->getBody(), true);
        $status = $result->getStatusCode();

        if ($status == 200) {
            $this->session->set('token', $data['token']);
            return redirect()->to('/');
        } else {
            return redirect()->to('/auth');
        }
    }
}
