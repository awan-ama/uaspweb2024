<?php
namespace App\Models;
use CodeIgniter\Model;

class SubmissionModel extends Model
{
    protected $table = 'submissions'; 
    protected $primaryKey = 'id'; 
    protected $useAutoIncrement = true;
    protected $allowedFields = ['fullname', 'nim', 'department', 'question'];

    // protected $validationRules = [
    //     'id' => 'required|is_unique[submissions.id]',
    //     'fullname' => 'required',
    //     'nim' => 'required',
    //     'department' => 'required',
    //     'question' => 'required',
    //     'submission_type' => 'required',
    //     'submission_date' => 'required',
    //     'status' => 'required|in_list[Pending,Disetujui,Ditolak]',
    //     'form_file' => 'required',
    // ]; 

    protected $validationRules = [
        'id' => 'required|is_unique[submissions.id]',
        'fullname' => 'required',
        'nim' => 'required',
        'department' => 'required',
        'question' => 'required',
        'submission_type' => 'required',
        'submission_date' => 'required',
        'status' => 'required|in_list[Pending,Disetujui,Ditolak]',
        'form_file' => 'required',
    ]; 

    // protected $useTimestamps = false; 
    // protected $returnType = 'array';
}