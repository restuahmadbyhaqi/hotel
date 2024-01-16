<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FutsalPelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KontrakanPelanggan_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'KontrakanPelanggan_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'KontrakanPelanggan_alamat' => [
                'type'       => 'TEXT',
                'null' => true
            ],
            'KontrakanPelanggan_tgl' => [
                'type' => 'DATE',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]         
        ]);
        $this->forge->addKey('KontrakanPelanggan_id', true);
        $this->forge->createTable('kontrakan_pelanggan');
    }

    public function down()
    {
        $this->forge->dropTable('kontrakan_pelanggan');
    }
}
