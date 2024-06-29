<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_Create_Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'primary' => true,
 	            'null' => false,
                'unique' => true,
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'program_studi' => [
                'type' => 'ENUM',
                'constraint' => ['sipil', 'arsitektur', 'tambang', 'kimia', 'lingkungan', 'mesin', 'informasi', 'geologi', 'elektro'], 
                'null' => false,
            ],
            'nomor_hp' => [
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
            'identitas' => [
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