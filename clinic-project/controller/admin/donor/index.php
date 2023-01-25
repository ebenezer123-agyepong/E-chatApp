<?php
session_start();
require '../../../vendor/autoload.php';

use utility\Globals;
use model\Donor;

$firstName = $lastName = $regionId = $bloodGroup = "";
$donor = null;

if (isset($_POST['__token']) && password_verify('verified-processing', $_POST['__token'])) {
  if (empty($_POST['first_name'])) {
    $_SESSION['message'] = '<div class="alert alert-modal alert-danger">First name field is required</div>';
    header('location: ../../../admin/donor.php');
  } else {
    $firstName = Globals::process($_POST['first_name']);
  }

  if (empty($_POST['last_name'])) {
    $_SESSION['message'] = '<div class="alert alert-modal alert-danger">Last name field is required</div>';
    header('location: ../../../admin/donor.php');
  } else {
    $lastName = Globals::process($_POST['last_name']);
  }

  if (empty($_POST['region'])) {
    $_SESSION['message'] = '<div class="alert alert-modal alert-danger">Region field is required</div>';
    header('location: ../../../admin/donor.php');
  } else {
    $regionId = Globals::process($_POST['region']);
  }

  if (empty($_POST['blood_group'])) {
    $_SESSION['message'] = '<div class="alert alert-modal alert-danger">Blood group field is required</div>';
    header('location: ../../../admin/donor.php');
  } else {
    $bloodGroup = Globals::process($_POST['blood_group']);
  }

  if (empty($_SESSION['message'])) {
    $donor = new Donor($firstName, $lastName, $bloodGroup, $regionId);
    $donor->save();
    $_SESSION['message'] = '<div class="alert alert-modal alert-success">Added new donor successfully</div>';
    header('location: ../../../admin/donor.php');
  } else {
    header('location: ../../../admin/donor.php');
  }
} else {
  header('location: ../../../admin/donor.php');
}