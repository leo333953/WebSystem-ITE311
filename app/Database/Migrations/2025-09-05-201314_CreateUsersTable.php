<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'role'        => [
                'type'       => 'ENUM',
                'constraint' => ['student', 'instructor', 'admin'],
                'default'    => 'student'
            ],
            'first_name'  => [
                'type'       => 'VARCHAR',
                'constraint' => 50
            ],
            'last_name'   => [
                'type'       => 'VARCHAR',
                'constraint' => 50
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'password'    => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'created_at'  => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at'  => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);

        // Primary Key
        $this->forge->addKey('id', true);

        // Unique Email
        $this->forge->addUniqueKey('email');

        // Create the table
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
