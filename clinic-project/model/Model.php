<?php
namespace model;

use mysqli;

trait Model
{
  protected static mysqli $db;

  /**
   * responsible for opening the connection to the database
   */
  protected static function open() {
    self::$db = new mysqli('localhost', 'root', '', 'bloodbank');
  }

  /**
   * responsible for closing the connection to the database
   */
  protected static function close() {
    self::$db->close();
  }

  /**
   * designed to be called during add or updating of data in the database
   */
  public abstract function save();

  /**
   * responsible for add data to database
   * and would have to be called in save() method
   */
  protected abstract function add();
  
  /**
   * responsible for add data to database
   * and would have to be called in save() method
   */
  protected abstract function update();
}