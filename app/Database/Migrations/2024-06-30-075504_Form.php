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
                'constraint' => ['sipil', 'arsitektur', 'tambang', 'kimia', 'lingkungan', 'mesin', 'informasi', 'geologi', 'elektro'],
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
            ]);
        
            $this->forge->addKey('id', true);
            $this->forge->createTable('formft', true);
    }
        public function down()
        {
            $this->forge->dropTable('formft', true);
        }
}

