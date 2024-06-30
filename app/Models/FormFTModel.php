<?php
namespace App\Models;
use CodeIgniter\Model;

class FormFTModel extends Model
{
    protected $table = 'formft';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fullname', 'nim', 'department', 'question', 'file', 'status', 'created_at'];
    protected $validationRules = [
        'nim' => 'required',
        'fullname' => 'required',
        'department' => 'required',
        'question' => 'required',
    ];

    protected $validationMessages = [
    ];

    protected $skipValidation = false;
}
