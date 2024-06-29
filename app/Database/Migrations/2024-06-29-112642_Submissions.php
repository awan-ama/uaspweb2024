<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Submissions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
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
                'type' => 'TEXT',
                'null' => false, 
            ],
            'submission_type' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false, 
            ],
            'submission_date' => [
                'type' => 'DATETIME',
                'null' => false, 
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['Pending', 'Disetujui', 'Ditolak'],
                'default' => 'Pending',
                'null' => false, 
            ],
            'form_file' => [
                'type' => 'MEDIUMBLOB',
                'null' => false, 
            ],
        ]);

        $this->forge->addForeignKey('nim', 'users', 'nim', 'CASCADE', 'CASCADE');

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('submissions', true);
    }

    public function down()
    {
        $this->forge->dropTable('submissions', true);
    }
}
