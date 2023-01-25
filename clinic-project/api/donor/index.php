<?php
require '../../vendor/autoload.php';

use model\Donor;

$donors = Donor::all();

echo json_encode($donors);