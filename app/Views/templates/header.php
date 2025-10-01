<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?= base_url('dashboard') ?>">Learning Management System</a>
    
    <?php if($role == 'student'):?>
        <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('dashboard') ?>">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('profile') ?>">Quizzes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="<?= base_url('logout') ?>">Logout</a>
        </li>
      </ul>
    </div>
    <?php elseif($role == 'teacher'):?>
        <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('dashboard') ?>">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('profile') ?>">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="<?= base_url('logout') ?>">Logout</a>
        </li>
      </ul>
    <?php elseif($role == 'admin'):?>
        <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('dashboard') ?>">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('profile') ?>">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="<?= base_url('logout') ?>">Logout</a>
        </li>
      </ul>
    </div>
    <?php endif; ?>
  </div>
</nav>

