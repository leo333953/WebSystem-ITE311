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
                'first_name' => 'Admin',
                'last_name'  => 'User',
                'email'      => 'admin@example.com',
                'password'   => password_hash('admin123', PASSWORD_DEFAULT),
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'role'       => 'instructor',
                'first_name' => 'John',
                'last_name'  => 'Doe',
                'email'      => 'instructor@example.com',
                'password'   => password_hash('instructor123', PASSWORD_DEFAULT),
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'role'       => 'student',
                'first_name' => 'Jane',
                'last_name'  => 'Smith',
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
