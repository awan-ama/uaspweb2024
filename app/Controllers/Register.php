<?php
namespace App\Controllers;
use App\Models\UserModel;

class Register extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function register()
    {
        $data = [
            'title' => 'Register Page'
        ];
        return view('register', $data);
    }

    public function save()
    {
        $data = $this->request->getPost(['nim', 'fullname', 'department', 'phone', 'email', 'role', 'password']);

        if (! $this->validateData($data, $this->model->validationRules)) {
            return $this->register();
        }

        $user = $this->validator->getValidated();

        $save = $this->model->save($user);

        if ($save) {
            session()->setFlashdata('success', 'Register akun berhasil');
            return redirect()->to(base_url('login'));
        } else {
            session()->setFlashdata('error', $this->model->errors());
            return redirect()->back();
        }
    }
}