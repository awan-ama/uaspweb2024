<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\FormFTModel;

class User extends BaseController
{
    protected $model;
    protected $modelForm;
    protected $session;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->modelForm = new FormFTModel();
        $this->session = session();
        $this->helpers = ['form', 'url'];
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

    public function eResponse()
    {
        $data = [
            'fullname' => $this->session->get('fullname')
        ];
        return view('e_response', $data);
    }

    public function eCommerce()
    {
        $data = [
            'fullname' => $this->session->get('fullname')
        ];
        return view('e_commerce', $data);
    }

    public function tanyaFT()
    {
        $data = [
            'fullname' => $this->session->get('fullname')
        ];
        return view('tanyaft', $data);
    }

    public function pengajuanTanyaFT()
    {
        $data = [
            'fullname' => $this->session->get('fullname'),
            'nim' => $this->session->get('nim'),
            'department' => $this->session->get('department')
        ];
        return view('tanyaft_pengajuan', $data);
    }

    // public function save()
    // {
    //     $data = $this->request->getPost(['fullname', 'nim', 'department', 'question']);
        
    //     $file = $this->request->getFile('file');
    //     if ($file->isValid() && !$file->hasMoved()) {
    //         $data['file'] = file_get_contents($file->getTempName());
    //     } else {
    //         return redirect()->back()->with('error', 'File upload failed.');
    //     }

    //     if (! $this->validate($this->modelForm->validationRules)) {
    //         return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    //     }

    //     if ($this->modelForm->save($data)) {
    //         return redirect()->to(base_url('user/e_response'))->with('success', 'Data has been saved successfully.');
    //     } else {
    //         return redirect()->back()->with('error', 'Data save failed.');
    //     }
    // }

    public function save()
    {
        $data = $this->request->getPost(['fullname', 'nim', 'department', 'question']);
        
        $file = $this->request->getFile('file');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $data['file'] = file_get_contents($file->getTempName());
        }

        if (! $this->validate($this->modelForm->validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        if ($this->modelForm->save($data)) {
            return redirect()->to(base_url('user/e_response/tanyaFT'))->with('success', 'Data has been saved successfully.');
        } else {
            return redirect()->back()->with('error', 'Data save failed.');
        }
    }

    public function detailTanyaFT()
    {
        $data = [
            'fullname' => $this->session->get('fullname')
        ];
        return view('tanyaft_detail', $data);
    }

    public function tanggapanTanyaFT()
    {
        $data = [
            'fullname' => $this->session->get('fullname')
        ];
        return view('tanyaft_response', $data);
    }
}
