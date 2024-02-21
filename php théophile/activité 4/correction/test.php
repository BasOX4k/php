<?php

require 'src/classes/User.php';
require 'src/classes/Database.php';

$database = new Database();

var_dump($database->getAllUtilisateurs());
