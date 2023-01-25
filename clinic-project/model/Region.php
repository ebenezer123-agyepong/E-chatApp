<?php
namespace model;

use model\Model;

class Region
{
  use Model;

  public $id;
  public $name;
  public $action;

  public function setId($id) { $this->id = $id; }
  public function getId() { return $this->id; }

  public function setName($name) { $this->name = $name; }
  public function getName() { return $this->name; }

  /**
   * save data in the store
   */
  protected function add() {
    self::open();
    $stmt = self::$db->prepare("INSERT INTO region(name) VALUES(?)");
    $stmt->bind_param("s", $this->name);
    $stmt->execute();
    self::close();
  }

  /**
   * update data in the store
   */
  protected function update() {
    self::open();
    $stmt = self::$db->prepare("UPDATE region SET name=? WHERE id=?");
    $stmt->bind_param("si", $this->name, $this->id);
    $stmt->execute();
    self::close();
  }

  /**
   * saves the data in the store
   */
  public function save() {
    if ($this->id === null)
      $this->add();
    else
      $this->update();
  }

  /**
   * search data in the data store
   */
  public static function search($data) {
    self::open();
    $result = self::$db->query("SELECT * FROM region WHERE name LIKE '%$data%' ORDER BY id desc");
    $regions = [];
    if ($result->num_rows > 0) {
      while($row = $result->fetch_object()) {
        $region = new Region();
        $region->setId($row->id);
        $region->setName($row->name);
        array_push($regions, $region);
      }
    }
    self::close();
    return $region;
  }

  /**
   * retreives all the data from the store
   */
  public static function all() {
    self::open();
    $result = self::$db->query("SELECT * FROM region ORDER BY id desc");
    $regions = [];
    if ($result->num_rows > 0) {
      while($row = $result->fetch_object()) {
        $region = new Region();
        $region->id = $row->id;
        $region->name = $row->name;
        $region->action = "<button value='$region->id' class='btn btn-secondary btn-sm btn-edit'>Edit</button>&nbsp;";
        $region->action .= "<button value='$region->id' class='btn btn-danger btn-sm btn-delete'>Delete</button>";
        array_push($regions, $region);
      }
    }
    self::close();
    return $regions;
  }

  /**
   * return a single region object per id
   */
  public static function find($id) {
    self::open();
    $result = self::$db->query("SELECT * FROM region WHERE id=$id");
    $region = null;
    if ($result->num_rows > 0) {
      $row = $result->fetch_object();
      $region = new Region();
      $region->setId($row->id);
      $region->setName($row->name);
    }
    self::close();
    return $region;
  }
}