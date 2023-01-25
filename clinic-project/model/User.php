<?php
namespace model;

use model\Model;

class User
{
  use Model;

  public $id;
  public $name;
  public $username;
  public $password;

  public function __construct($name, $username, $password)
  {
    $this->name = $name;
    $this->username = $username;
    $this->password = $password;
  }

  protected function add() {
    $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT);
    self::open();
    $stmt = self::$db->prepare("INSERT INTO users(name, username, password) VALUES(?, ?, ?)");
    $stmt->bind_param("sss", $this->name, $this->username, $hashedPassword);
    $stmt->execute();
    self::close();
  }
  
  protected function update() {
    $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT);
    self::open();
    $stmt = self::$db->prepare("UPDATE users SET password=? WHERE id=?");
    $stmt->bind_param("si", $hashedPassword, $this->id);
    $stmt->execute(); 
    self::close();
  }

  public function save() {
    if ($this->id == null) 
      $this->add();
    else
      $this->update();
  }

  public static function all() {
    self::open();
    $result = self::$db->query("SELECT * FROM users ORDER BY id desc");
    $users = [];
    if ($result->num_rows > 0) {
      while($row = $result->fetch_object()) {
        $user = new self($row->name, $row->username , $row->password);
        $user->id = $row->id;
        array_push($users, $user);
      }
    }
    self::close();
    return $users;
  } 

  public static function find($id) {
    self::open();
    $result = self::$db->query("SELECT * FROM users WHERE id=$id");
    $user = null;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_object()) {
        $user = new self($row->name, $row->username , $row->password);
        $user->id = $row->id;
      }
    }
    self::close();
    return $user;
  }

  public static function findByUserName($username) {
    self::open();
    $result = self::$db->query("SELECT * FROM users WHERE username='$username'");
    $user = null;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_object()) {
        $user = new self($row->name, $row->username , $row->password);
        $user->id = $row->id;
      }
    }
    self::close();
    return $user;
  }
}