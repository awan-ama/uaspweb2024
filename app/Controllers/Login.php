<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        helper(['form', 'url', 'session']); // Add 'session' helper here
    }

    public function login()
    {
        $data = [
            'title' => 'Login Page'
        ];
        return view('login_view', $data);
    }

    public function save()
    {
        $data = $this->request->getPost(['nim', 'password']);

        if (! $this->validate([
            'nim' => 'required',
            'password' => 'required'
        ])) {
            return $this->login();
        }

        $nim = $data['nim'];
        $password = $data['password'];

        $user = $this->model->where('nim', $nim)
            ->first();

        if (! $user) {
            session()->setFlashdata('error', 'Username atau password anda salah.');
            return redirect()->to('login'); 
        }

        $passwordCheck = password_verify($password, $user['password']);

        if (! $passwordCheck) {
            session()->setFlashdata('error', 'Username atau password anda salah.');
            return redirect()->to('login'); 
        }

        
        $userData = [
            'fullname' => $user['fullname'],
            'nim' => $user['nim'],
            'logged_in' => true 
        ];

        session()->set($userData);
        return redirect()->to('user/dashboard');
    }
}
