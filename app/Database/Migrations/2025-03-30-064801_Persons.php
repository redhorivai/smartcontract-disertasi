<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Persons extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'person_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_lengkap' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'nik' => [
                'type' => 'CHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM',
                'constraint' => ['L','P'],
                'null' => true,
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status_cd' => [
                'type' => 'ENUM',
                'constraint' => ['normal', 'nullified'],
                'default'    => 'normal',
            ],
            'created_user' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_dttm' => [
                'type' => 'DATETIME',
                'null' => 'current_timestamp()',
            ],'updated_user' => [
                'type' => 'INT',
                'null' => true,
            ],'updated_dttm' => [
                'type' => 'DATETIME',
                'null' => true,
            ],'nullified_user' => [
                'type' => 'INT',
                'null' => true,
            ],
            'nullified_dttm' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('person_id', true);
        $this->forge->createTable('persons');
    }

    public function down()
    {
        $this->forge->dropTable('persons');
    }
}
