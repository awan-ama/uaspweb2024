<?php
namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
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

        if (! $this->validateData($data, [
            'nim' => 'required',
            'password' => 'required'
        ])) {
            return $this->login();
        }

        $nim = $this->request->getPost('nim');
        $password = $this->request->getPost('password');

        $credentials = ['nim' => $nim];

        $user = $this->model->where($credentials)
            ->first();

        if (! $user) {
            session()->setFlashdata('error', 'Username atau password anda salah.');
            return redirect()->back();
        }

        $passwordCheck = password_verify($password, $user['password']);

        if (! $passwordCheck) {
            session()->setFlashdata('error', 'Username atau password anda salah.');
            return redirect()->back();
        }

        $userData = [
            'fullname' => $user['fullname'],
            'nim' => $user['nim'],
            'logged_in' => TRUE
        ];

        session()->set($userData);
        return redirect()->to(base_url('/'));
    }
}