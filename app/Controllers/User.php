<?php
namespace App\Controllers;

class User extends BaseController
{
    public function dashboard()
    {
        return view('dashboard_view');
    }
}