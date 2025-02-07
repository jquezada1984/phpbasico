<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php isset($description)? $description : '' ?>">
    <meta name="author" content="<?php isset($author)? $author : '' ?>">

    <title><?= isset($title)? $title : '' ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
     <?php $version='?v='.date('YmdHis'); ?>
    <link href="<?= base_url('css/sb-admin-2.min.css').$version ?>" rel="stylesheet" type="text/css">

    <!-- Cargar los scripts dinámicamente -->
<?php if (isset($csss) && is_array($csss)): ?>
        <?php foreach ($csss as $css): ?>
            <link href="<?= base_url($css).$version ?>" rel="stylesheet" type="text/css">
        <?php endforeach; ?>
    <?php endif; ?>
</head>