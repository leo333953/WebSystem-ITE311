<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');

$routes->get('auth/logout', 'Auth::logout'); 
$routes->get('/dashboard', 'Auth::dashboard');

// Temporary routes for Step 2 testing - Add these lines
$routes->get('/admin/dashboard', function() {
    return "Step 2 Working! Admin Dashboard - Role: " . session()->get('role');
});

$routes->get('/teacher/dashboard', function() {
    return "Step 2 Working! Teacher Dashboard - Role: " . session()->get('role');
});

$routes->get('/student/dashboard', function() {
    return "Step 2 Working! Student Dashboard - Role: " . session()->get('role');
});

$routes->get('dashboard', 'Auth::dashboard');
// For enrolling via AJAX
$routes->post('course/enroll', 'Course::enroll');

// For displaying enrolled courses / success message
$routes->get('course/enroll', 'Course::enrollPage');
// Keep your existing routes below these