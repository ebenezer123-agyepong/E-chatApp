<?php
namespace utility;

abstract class Globals 
{
  public static function process($data) {
    $result = trim($data);
    $result = stripcslashes($result);
    $result = htmlspecialchars($result);
    return $result;
  }

  public static function print($key) {
    if (isset($_SESSION[$key])) {
      echo $_SESSION[$key];
      unset($_SESSION[$key]);
    }
  }
  
  public static function session($key) {
    $outcome = '';
    if (isset($_SESSION[$key])) {
      $outcome = $_SESSION[$key];
      unset($_SESSION[$key]);
    }
    return $outcome;
  }

  public static function auth() {
    if (!isset($_SESSION['user_id'])) {
      header('location: ../index.php');
    }
  }
}