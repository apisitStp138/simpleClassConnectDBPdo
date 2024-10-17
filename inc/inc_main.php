<?php
require_once __DIR__ . '/../config/config_db.php';
require_once __DIR__ . '/../class/connect_db.php';

$db = new ConnectDatabase($host, $username, $password, $dbname); // get data variables from config_db.php
