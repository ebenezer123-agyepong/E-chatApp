<?php
session_start();
require "../../../vendor/autoload.php";

use model\Region;
use utility\Globals;

$name = '';
$region = null;

if (isset($_POST['__token']) && password_verify("verified-processing", $_POST['__token'])) {
  if (empty($_POST['name'])) {
    $_SESSION['message'] = '<div class="alert alert-modal alert-danger">Name field is required</div>';
    header('location: ../../../admin/region.php');
  }
  else
    $name = Globals::process($_POST['name']);

  if (empty($_SESSION['message'])) {
    $region = new Region();
    $region->setName($name);
    $region->save();
    $_SESSION['message'] = '<div class="alert alert-modal alert-success">Added new region successfully</div>';
    header('location: ../../../admin/region.php');
  }
} else {
  header('location: ../../../admin/region.php');
}