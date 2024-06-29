<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_Create_Pengajuan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
            ],
            'program_studi' => [
                'type' => 'ENUM',
                'constraint' => ['sipil', 'arsitektur', 'tambang', 'kimia', 'lingkungan', 'mesin', 'informasi', 'geologi', 'elektro'], 
                'null' => false,
            ],
            'pertanyaan' => [
                'type' => 'TEXT',
            ],
            'jenis_pengajuan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tanggal_pengajuan' => [
                'type' => 'DATETIME',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['Pending', 'Disetujui', 'Ditolak'],
                'default' => 'Pending',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'berkas' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);

        $this->forge->addForeignKey('nim', 'users', 'nim', 'CASCADE', 'CASCADE');

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('pengajuan', true);
    }

    public function down()
    {
        $this->forge->dropTable('pengajuan', true);
    }
}
