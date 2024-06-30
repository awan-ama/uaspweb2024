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
        $form = new FormFTModel();
        $data['forms'] = $form->findAll();
        // $data = [
        //     'fullname' => $this->session->get('fullname')
        // ];
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

    public function detailTanyaFT($id)
    {
        $form = new FormFTModel();
        $data['forms'] = $form->where('id', $id)->first();
		
		if(!$data['forms']){
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('detail_pengajuan', $data);
    }

    public function downloadFile($id)
{
    $form = new FormFTModel();
    $data = $form->select('file, file_name, file_type')->where('id', $id)->first();

    if (!$data) {
        throw PageNotFoundException::forPageNotFound();
    }
    header('Content-Description: File Transfer');
    header('Content-Type: ' . $data['file_type']);
    header('Content-Disposition: attachment; filename="' . $data['file_name'] . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . strlen($data['file']));
    echo $data['file'];
    exit;
}

    public function tanggapanTanyaFT($id)
    {
        $form = new FormFTModel();
        $data['forms'] = $form->where('id', $id)->first();
		
		if(!$data['forms']){
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('tanyaft_response', $data);
    }
}
