<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1>Welcome to Teacher Dashboard</h1>
    <p>Hello, <?= $user['name'] ?> (<?= $user['role'] ?>)</p>
    <a href="<?= base_url('logout') ?>">Logout</a>
</body>
</html>