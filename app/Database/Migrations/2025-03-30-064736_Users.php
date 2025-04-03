<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_person' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'username' => [
                'type' => 'CHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'email' => [
                'type' => 'CHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'telp' => [
                'type' => 'CHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'level' => [
                'type' => 'ENUM',
                'constraint' => ['user', 'verif', 'administrator'],
                'null' => true,
            ],
            'is_active' => [
                'type' => 'ENUM',
                'constraint' => ['active', 'deactive'],
                'default'    => 'active',
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
        $this->forge->addKey('user_id', true);
        // $this->forge->addForeignKey('id_person', 'persons', 'person_id','CASECADE','CASECADE');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
