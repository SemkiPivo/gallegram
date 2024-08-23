<?php
use App\Application\Views\View;
use App\Application\Config\Config;
?>

<!doctype html>
<html lang="<?= Config::get('app.lang') ?>">
<head>
    <meta charset="UTF-8">
    <title><?=$title?> - <?= Config::get('app.name') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="../../elephant.ico" type="image/ico">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
    View::component('navbar');
?>
