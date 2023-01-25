<?php
session_start();
require "../../vendor/autoload.php";

use model\User;
use utility\Globals;

$username = $password = "";

if (isset($_POST['__token']) && password_verify("verified-processing", $_POST['__token'])) {
  if (empty($_POST['username'])) {
    $_SESSION['username_err'] = 'Username field is required';
  } else {
    $username = Globals::process($_POST['username']);
  }
  
  if (empty($_POST['password'])) {
    $_SESSION['password_err'] = 'Password field is required';
  } else {
    $password = Globals::process($_POST['password']);
  }
  
  if (empty($_SESSION['username_err']) && empty($_SESSION['password_err'])) {
    $user = User::findByUserName($username);
    if ($user !== null && password_verify($password, $user->password)) {
      $_SESSION['message'] = '<div class="alert alert-modal alert-success">You have successfully logged into your account</div>';
      $_SESSION['user_id'] = $user->id;
      header('location: ../../admin/index.php');
    } else {
      $_SESSION['message'] = 'Invalid username and or password';
      header('location: ../../index.php');
    }
  } else {
    header('location: ../../index.php');
  }
} else {
  header('location: ../../index.php');
}
