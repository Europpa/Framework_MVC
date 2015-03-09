<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo APP_NAME; ?></title>
</head>
<body>
    <h1><?php echo APP_SLOGAN; ?></h1>

    <?php foreach($menu as $reg){ ?>

    <a href="<?php echo $reg['enlace'] ?>"> <?php echo $reg['titulo'] ?></a>


    <?php } ?>
