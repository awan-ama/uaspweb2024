<?php
namespace App\Controllers;

class User extends BaseController
{
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
    public function eResponse(){
        return view('e-response_view');
    }

    public function tanyaFT(){
        return view('tanyaft1_view');
    }
    public function pengajuanTanyaFT(){
        return view('Pengajuan_tanyaft_view');
    }

    public function detailTanyaFT(){
        return view('detail_tanyaft_view');
    }

    public function tanggapanTanyaFT(){
        return view('tanggapan_tanyaft_view');
    }
}