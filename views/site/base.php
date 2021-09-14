<?php require("./helpers/ti.php") ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte ao Cliente</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://codeseven.github.io/toastr/build/toastr.min.css">

    <?php startblock('styles'); ?>
    <?php endblock(); ?>
</head>
<body>

    <?php //include "header.php" ?>
    <?php startblock('content'); ?>
    <?php endblock(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <?php startblock('scripts'); ?>
    <?php endblock(); ?>
    
</body>
</html>