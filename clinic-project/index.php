<?php
session_start();
require("./vendor/autoload.php");
use utility\Globals;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Bank</title>
  <link rel="stylesheet" href="./public/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="./public/fontawesome/css/brands.min.css">
  <link rel="stylesheet" href="./public/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="./public/fontawesome/css/regular.min.css">
  <link rel="stylesheet" href="./public/fontawesome/css/solid.min.css">
  <link rel="stylesheet" href="./public/css/home/style.css">
  <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css">
</head>
<body>
  <main class="main">
    <h4 class="mb-3 text-dark text-center">Welcome to Blood Bank Service Control Center</h4>
    <div class="p-3 border rounded shadow-sm main__holder">
      <h5 class="mb-2 text-dark">Login</h5>
      <?php echo "<p class='text-danger'>". Globals::session('message') ."</p>"; ?>
      <form action="./controller/home/authenticate.php" method="post">
        <input type="hidden" name="__token" value="$2y$10$v8ZOxda7RwgXAaOib7kvu.MYVjbtcAo6e9G615zBekfMjPiMwmDdG">
        <div class="form-group">
          <label for="username" class="mb-1">Username</label>
          <input type="text" class="form-control" id="username" name="username">
          <?php echo '<small class="text-danger">' . Globals::session('username_err') .'</small>'; ?>
        </div>
        <div class="form-group">
          <label for="password" class="mb-1">Password</label>
          <input type="password" class="form-control" id="password" name="password">
          <?php echo '<small class="text-danger">'. Globals::session('password_err') .'</small>'; ?>
        </div>
        <input type="submit" value="Login" class="btn btn-success">
      </form>
    </div>
    <footer class="mt-5 text-center">
      <p>Blood Bank Control Center &copy; 2022 | All rights reserved</p>
    </footer>
  </main>
</body>
</html>