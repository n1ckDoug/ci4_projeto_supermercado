<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersTable extends Migration
{
    public function up()
    {
        // create users table
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'passwrd' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'roles' => [
                'type' => 'VARCHAR',
                'constraint' => 500,
            ],
            'blocked_until' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'active' => [
                'type' => 'INT',
                'constraint' => 1,
            ],
            'code' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'last_login' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);

        // primary key
        $this->forge->addKey('id', true);

        //create table
        $this->forge->createTable('users');
    }

    public function down()
    {
        // drop table
        $this->forge->dropTable('users');
    }
}
