<?php
namespace App\Controllers;
use App\Models\UserModel;

class User extends BaseController
{

    public function __construct()
    {
        $this->model = new UserModel();
        $this->session = session();
    }

    public function dashboard()
    {
        $data = [
            'fullname' => $this->session->get('fullname')
        ];
        return view('dashboard', $data);
    }
    
    public function eServices()
    {
        $data = [
            'fullname' => $this->session->get('fullname')
        ];
        return view('e_services', $data);
    }
    public function eCommandCenter()
    {
        $data = [
            'fullname' => $this->session->get('fullname')
        ];
        return view('e_command_center', $data);
    }
    public function eResponse(){
        $data = [
            'fullname' => $this->session->get('fullname')
        ];
        return view('e_response', $data);
    }

    public function eCommerce(){
        $data = [
            'fullname' => $this->session->get('fullname')
        ];
        return view('e_commerce', $data);
    }

    public function tanyaFT(){
        $data = [
            'fullname' => $this->session->get('fullname')
        ];
        return view('tanyaft', $data);
    }
    public function pengajuanTanyaFT(){
        $data = [
            'fullname' => $this->session->get('fullname'),
            'nim' => $this->session->get('nim'),
            'department' => $this->session->get('department')
        ];
        return view('tanyaft_pengajuan', $data);
    }

    public function detailTanyaFT(){
        $data = [
            'fullname' => $this->session->get('fullname')
        ];
        return view('tanyaft_detail', $data);
    }

    public function tanggapanTanyaFT(){
        $data = [
            'fullname' => $this->session->get('fullname')
        ];
        return view('tanyaft_response', $data);
    }
}