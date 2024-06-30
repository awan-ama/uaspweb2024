<?php
namespace App\Controllers;

class User extends BaseController
{
    public function dashboard()
    {
        return view('dashboard');
    }
    
    public function eServices()
    {
        return view('e_services');
    }
    public function eCommandCenter()
    {
        return view('e_command_center');
    }
    public function eResponse(){
        return view('e_response');
    }

    public function eCommerce(){
        return view('e_commerce');
    }

    public function tanyaFT(){
        return view('tanyaft');
    }
    public function pengajuanTanyaFT(){
        return view('tanyaft_pengajuan');
    }

    public function detailTanyaFT(){
        return view('tanyaft_detail');
    }

    public function tanggapanTanyaFT(){
        return view('tanyaft_response');
    }
}