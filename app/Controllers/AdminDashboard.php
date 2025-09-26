<?php
namespace App\Controllers;

class AdminDashboard extends BaseController
{
    public function index()
    {
        if (!session('isLoggedIn') || session('role') !== 'admin') {
            return redirect()->to('/login');
        }
        
        $data = [
            'title' => 'Admin Dashboard',
            'user' => [
                'name' => session('name'),
                'role' => session('role')
            ]
        ];
        return view('admin/dashboard', $data);
    }
}