<?php
require "../../vendor/autoload.php";

use model\Region;

$data = Region::all();

echo json_encode($data);