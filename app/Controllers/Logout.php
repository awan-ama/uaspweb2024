<?php namespace App\Controllers;

class Logout extends BaseController
{
    public function logout()
    {
        $userData = [
            'fullname',
            'nim',
            'logged_in'
        ];
        
        session()->remove($userData);
        return redirect()->to(base_url('login'));

    }
}