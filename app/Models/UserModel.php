<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['nim', 'fullname', 'department', 'phone', 'email', 'role', 'password'];

    protected $validationRules = [
        'nim' => 'required|is_unique[users.nim]',
        'fullname' => 'required',
        'department' => 'required',
        'phone' => 'required',
        'email' => 'required|valid_email|is_unique[users.email]',
        'role' => 'required',
        'password' => 'required|min_length[4]'
    ];

    protected $validationMessages = [
        'nim' => [
            'is_unique' => 'Maaf, NIM yang anda masukkan sudah terdaftar.'
        ],
        'email' => [
            'is_unique' => 'Maaf, email yang anda masukkan sudah terdaftar.'
        ]
    ];

    protected $skipValidation = false;
    protected $beforeInsert = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (! isset($data['data']['password'])) {
            return $data;
        }

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }
}
