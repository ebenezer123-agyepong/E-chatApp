<?php
namespace model;

use model\Model;
use model\Region;

class Donor
{
  use Model;

  public $id;
  public $firstName;
  public $lastName;
  public $bloodGroup;
  public $region;
  public $regionId;

  public function __construct($firstName, $lastName, $bloodGroup, $regionId)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->bloodGroup = $bloodGroup;
    $this->regionId = $regionId;
    $this->region = Region::find($regionId);
  }

  public function add() {
    self::open();
    $stmt = self::$db->prepare("INSERT INTO donor(first_name, last_name, region_id, blood_group) VALUES(?, ?, ?, ?)");
    $stmt->bind_param("ssis", $this->firstName, $this->lastName, $this->regionId, $this->bloodGroup);
    $stmt->execute();
    self::close();
  }

  public function update() {
    self::open();
    $stmt = self::$db->prepare("UPDATE donor SET first_name=?, last_name=?, blood_group=?, region_id=? WHERE id=?");
    $stmt->bind_param("sssii", $this->firstName, $this->lastName, $this->bloodGroup, $this->regionId, $this->id);
    $stmt->execute();
    self::close();
  }

  public function save() {
    if ($this->id === null)
      $this->add();
    else
      $this->update();
  }

  public static function all() {
    self::open();
    $result = self::$db->query("SELECT * FROM donor ORDER BY id desc");
    $donors = [];
    if ($result->num_rows > 0) {
      while($row = $result->fetch_object()) {
        $donor = new self($row->first_name, $row->last_name, $row->blood_group, $row->region_id);
        $donor->id = $row->id;
        array_push($donors, $donor);
      }
    }
    self::close();
    return $donors;
  }

  public static function find($id) {
    self::open();
    $result = self::$db->query("SELECT * FROM donor WHERE id=$id");
    $donor = null;
    if ($result->num_rows > 0) {
      $row = $result->fetch_object();
      $donor = new self($row->first_name, $row->last_name, $row->blood_group, $row->region_id);
      $donor->id = $row->id;
    }
    self::close();
    return $donor;
  }
}