<?php
  session_start();
  require "../vendor/autoload.php";
  use utility\Globals;
  Globals::auth();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Bank</title>
  <link rel="shortcut icon" href="../public/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../public/fontawesome/css/brands.min.css">
  <link rel="stylesheet" href="../public/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="../public/fontawesome/css/regular.min.css">
  <link rel="stylesheet" href="../public/fontawesome/css/solid.min.css">
  <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/admin/style.css">
  <link rel="stylesheet" href="../public/css/admin/custom-modal.css">
  <link rel="stylesheet" href="../public/datatables/datatables.css">
  <script src="../public/js/jquery.min.js"></script>
  <script src="../public/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../public/bootstrap/js/bootstrap.min.js"></script>
  <script src="../public/datatables/datatables.js"></script>
</head>
<body>