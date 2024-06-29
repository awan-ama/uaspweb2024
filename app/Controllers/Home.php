<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login_view');
    }

    // public function register()
    // {
    //     return view('register_view');
    // }

    // public function dashboard()
    // {
    //     return view('dashboard_view');
    // }
    public function eservices()
    {
        return view('e-services_view');
    }
    public function ecommandcenter()
    {
        return view('e-command_center_view');
    }
    public function eresponse(){
        return view('e-response_view');
    }

    public function tanyaft1(){
        return view('tanyaft1_view');
    }
    public function pengajuantanya(){
        return view('Pengajuan_tanyaft_view');
    }
}