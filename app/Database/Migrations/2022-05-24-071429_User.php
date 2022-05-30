<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'NPM'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],
            'Nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'jenis_kelamin'       => [
                'type'              => 'ENUM',
                'constraint'        => "'pria','wanita'",
            ],
            'fakultas' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'no_telp' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'tanggal_lahir' => [
                'type'           => 'DATE'
            ],
            'alamat' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('user');
    }
 

    public function down()
    {
        $this->forge->dropTable('User');
    }
}
