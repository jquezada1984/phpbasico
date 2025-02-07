<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard, <?= session()->get('username'); ?>!</h1>
    <a href="<?= site_url('logout') ?>">Logout</a>
</body>
</html>
