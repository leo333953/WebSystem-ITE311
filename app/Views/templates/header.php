<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
        }
        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
        }
        .navbar {
            background-color: #0d6efd;
        }
        .sidebar .nav-link.active {
            background-color: rgba(255,255,255,0.15);
            border-radius: 6px;
        }
        .sidebar .nav-link:hover {
            background-color: rgba(255,255,255,0.1);
            border-radius: 6px;
        }
        .hover-card {
            transition: all 0.25s ease-in-out;
            cursor: pointer;
        }
        .hover-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }
        .ms-220 {
            margin-left: 220px;
        }
    </style>
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('dashboard') ?>">LMS Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item me-3">
                        <span class="text-white">Hello, <?= esc($role) ?></span>
                    </li>
                    <li class="nav-item me-2">
                        <a href="#" class="btn btn-outline-light btn-sm"><i class="bi bi-bell"></i></a>
                    </li>
                    <li class="nav-item">
                        <
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
