<?php
session_start();
require "../../../vendor/autoload.php";

use model\User;
use utility\Globals;

$userId = '';
if (isset($_SESSION['user_id']) && User::find($_SESSION['user_id']) !== null) 
  $userId = $_SESSION['user_id'];
else
  header('location: ../../../admin/profile.php');

$currentPassword = $confirmPassword = $newPassword = "";
$user = User::find($_SESSION['user_id']);

if (isset($_POST['__token']) && password_verify("verified-processing", $_POST['__token'])) {
  if (empty($_POST['current_password'])) {
    $_SESSION['current_password_err'] = 'Current password field is required';
  } else {
    $currentPassword = Globals::process($_POST['current_password']);
  }
  
  if (empty($_POST['new_password'])) {
    $_SESSION['new_password_err'] = 'New password field is required';
  } else {
    $newPassword = Globals::process($_POST['new_password']);
    if (!preg_match("/^[a-zA-Z0-9]*$/", $newPassword)) 
    $_SESSION['new_password_err'] = 'Only letters and numbers are allowed';
  }
  
  if (empty($_POST['confirm_password'])) {
    $_SESSION['confirm_password_err'] = 'Confirm password field is required';
  } else {
    $confirmPassword = Globals::process($_POST['confirm_password']);
    if ( strcmp($newPassword, $confirmPassword) !== 0 )
      $_SESSION['confirm_password_err'] = 'Passwords do not match each other';
  }
  
  if (empty($_SESSION['current_password_err']) && empty($_SESSION['new_password_err']) && empty($_SESSION['confirm_password_err'])) {
    if (password_verify($currentPassword, $user->password)) {
      $user->password = $confirmPassword;
      $user->save();
      $_SESSION['message'] = '<div class="alert alert-modal alert-success">Password changed successfully</div>';
    } else {
      $_SESSION['message'] = '<div class="alert alert-modal alert-danger">Unable to change password, please check your password and try again</div>';
    }
    header('location: ../../../admin/profile.php');
  } else {
    header('location: ../../../admin/profile.php');
  }
} else {
  header('location: ../../../admin/profile.php');
}