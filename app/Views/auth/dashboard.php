<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Dashboard</h4>
                </div>
                <div class="card-body text-center">
                    <h5 class="mb-3">Welcome, <span class="text-primary"><?= esc($user['name']) ?></span>!</h5>
                    <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
                    <p><strong>Role:</strong> <?= esc($user['role']) ?></p>

                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success mt-3"><?= session()->getFlashdata('success') ?></div>
                    <?php endif; ?>

                    <a href="<?= base_url('logout') ?>" class="btn btn-danger mt-3">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
