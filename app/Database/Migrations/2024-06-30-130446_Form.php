<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Form extends Migration
{
    public function up()
        {
        $this->forge->addField([
            'id' => [
                'type'    => 'INT',
				'constraint' => 20,
				'unsigned' => true,
				'auto_increment' => true
            ],
            'fullname' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
            ],
            'department' => [
                'type' => 'ENUM',
                'constraint' => ['Teknik Sipil', 'Arsitektur', 'Teknik Pertambangan', 
                'Teknik Kimia', 'Teknik Lingkungan', 'Teknik Mesin', 'Teknologi Informasi', 'Rekayasa Geologi', 'Rekayasa Elektro'],
                'null' => false,
            ],
            'question' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
            ],
            'file' => [
                'type' => 'MEDIUMBLOB',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['Diproses', 'Disetujui', 'Ditolak'],
                'default' => 'Diproses',
                'null' => false,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
            ]);
        
            $this->forge->addKey('id', true);
            $this->forge->createTable('formft', true);
    }
        public function down()
        {
            $this->forge->dropTable('formft', true);
        }
}

