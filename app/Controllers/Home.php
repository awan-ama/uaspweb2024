<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function login()
    {
        return view('login_view');
    }

    public function register()
    {
        return view('register_view');
    }

    public function dashboard()
    {
        return view('dashboard_view');
    }
}