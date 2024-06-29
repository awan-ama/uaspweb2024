<?php

namespace App\Controllers;

use App\Models\SubmissionModel;

class User extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new SubmissionModel();
        $this->helpers = ['form', 'url'];
    }

    public function dashboard()
    {
        return view('dashboard_view');
    }

    public function eServices()
    {
        return view('e-services_view');
    }

    public function eCommandCenter()
    {
        return view('e-command_center_view');
    }

    public function eResponse()
    {
        return view('e-response_view');
    }

    public function eCommerce()
    {
        return view('e-commerce_view');
    }

    public function tanyaFT()
    {
        return view('tanyaft1_view');
    }

    public function pengajuanTanyaFT()
    {
        $data = [
            'title' => 'Pengajuan Tanya FT'
        ];
        return view('pengajuan_tanyaft_view', $data);
    }

    public function addPengajuanTanyaFT()
    {
        $data = $this->request->getPost(['nim', 'fullname', 'department', 'question']);

        if (! $this->validateData($data, $this->model->validationRules)) {
            return $this->tanyaFT();
        }

        $user = $this->validator->getValidated();

        $addPengajuanTanyaFT = $this->model->addPengajuanTanyaFT($user);

        if ($addPengajuanTanyaFT) {
            session()->setFlashdata('success', 'Register akun berhasil');
            return redirect()->to(base_url('user/dashboard'));
        } else {
            session()->setFlashdata('error', $this->model->errors());
            return redirect()->back();
        }
    }

    public function detailTanyaFT()
    {
        return view('detail_tanyaft_view');
    }

    public function tanggapanTanyaFT()
    {
        return view('response-tanyaft_view');
    }
}
