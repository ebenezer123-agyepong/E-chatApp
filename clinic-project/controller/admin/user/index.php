<?php
session_start();
require "../../../vendor/autoload.php";

use utility\Globals;
use model\User;

$name = $username = $password = $confirmPassword = "";

if (isset($_POST['__token']) && password_verify("verified-processing", $_POST['__token'])) {
  if (empty($_POST['name'])) {
    $_SESSION['message'] = '<div class="alert alert-modal alert-danger">Name field is required</div>';
    header('location: ../../../admin/user-management.php');
  } else {
    $name = Globals::process($_POST['name']);
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
      $_SESSION['message'] = '<div class="alert alert-modal alert-danger">Only letters and whitespace are allowed</div>';
      header('location: ../../../admin/user-management.php');
    }
  }
  
  if (empty($_POST['username'])) {
    $_SESSION['message'] = '<div class="alert alert-modal alert-danger">Username field is required</div>';
    header('location: ../../../admin/user-management.php');
  } else {
    $username = Globals::process($_POST['username']);
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
      $_SESSION['message'] = '<div class="alert alert-modal alert-danger">Only letters and numbers are allowed</div>';
      header('location: ../../../admin/user-management.php');
    }
  }
  
  if (empty($_POST['password'])) {
    $_SESSION['message'] = '<div class="alert alert-modal alert-danger">Password field is required</div>';
    header('location: ../../../admin/user-management.php');
  } else {
    $password = Globals::process($_POST['password']);
    if (!preg_match("/^[a-zA-Z0-9]*$/", $password)) {
      $_SESSION['message'] = '<div class="alert alert-modal alert-danger">Only letters and numbers are allowed</div>';
      header('location: ../../../admin/user-management.php');
    }
  }
  
  if (empty($_POST['confirm_password'])) {
    $_SESSION['message'] = '<div class="alert alert-modal alert-danger">Confirm Password field is required</div>';
    header('location: ../../../admin/user-management.php');
  } else {
    $confirmPassword = Globals::process($_POST['confirm_password']);
    if (strcmp($password, $confirmPassword) != 0) {
      $_SESSION['message'] = '<div class="alert alert-modal alert-danger">Passwords do not match each other</div>';
      header('location: ../../../admin/user-management.php');
    }
  }
  
  if (empty($_SESSION['message'])) {
    $user = new User($name, $username, $confirmPassword);
    $user->save();
    $_SESSION['message'] = '<div class="alert alert-modal alert-success">Added new admin user successfully</div>';
    header('location: ../../../admin/user-management.php');
  } else {
    header('location: ../../../admin/user-management.php');
  }
} else {
  header('location: ../../../admin/user-management.php');
}