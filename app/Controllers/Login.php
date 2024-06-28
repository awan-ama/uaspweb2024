<?php
namespace App\Controllers;

class Login extends BaseController
{
    public function login()
    {
        return view('login_view');
    }

    public function save()
    {
        return view('dashboard_view');
    }
}