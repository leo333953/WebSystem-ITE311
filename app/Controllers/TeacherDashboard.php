<?php
namespace App\Controllers;

class TeacherDashboard extends BaseController
{
    public function index()
    {
        if (!session('isLoggedIn') || session('role') !== 'teacher') {
            return redirect()->to('/login');
        }
        
        $data = [
            'title' => 'Teacher Dashboard',
            'user' => [
                'name' => session('name'),
                'role' => session('role')
            ]
        ];
        return view('teacher/dashboard', $data);
    }
}