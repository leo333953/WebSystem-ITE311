<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'role'       => 'admin',
                'name' => 'Admin',
                'email'      => 'admin@example.com',
                'password'   => password_hash('admin123', PASSWORD_DEFAULT),
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'role'       => 'teacher',
                'name' => 'John',
                'email'      => 'teaher@example.com',
                'password'   => password_hash('teacher123', PASSWORD_DEFAULT),
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'role'       => 'student',
                'name' => 'Jane',
                'email'      => 'student@example.com',
                'password'   => password_hash('student123', PASSWORD_DEFAULT),
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];

        // Insert all users
        $this->db->table('users')->insertBatch($data);
    }
}
