<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
        {
        $this->forge->addField([
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'primary' => true,
                'unique' => true,
            ],
            'fullname' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'department' => [
                'type' => 'ENUM',
                'constraint' => ['sipil', 'arsitektur', 'tambang', 
                'Teknik Kimia', 'lingkungan', 'mesin', 'informasi', 'geologi', 'elektro'],
                'null' => false,
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'unique' => true, 
                'null' => false,
            ],
            'role' => [
                'type' => 'ENUM',
                'constraint' => ['student'],
                'null' => false,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            ]);
        
            $this->forge->addKey('nim', true);
        
            $this->forge->createTable('users', true);
    }
        public function down()
        {
            $this->forge->dropTable('users', true);
        }
}

