<?php
namespace App\Controllers;

class StudentDashboard extends BaseController
{
    public function index()
    {
        if (!session('isLoggedIn') || session('role') !== 'student') {
            return redirect()->to('/login');
        }
        
        $data = [
            'title' => 'Student Dashboard',
            'user' => [
                'name' => session('name'),
                'role' => session('role')
            ]
        ];
        return view('student/dashboard', $data);
    }
}