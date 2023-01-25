<?php
require '../../vendor/autoload.php';

use model\User;

$users = User::all();
echo json_encode($users);