<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

// if (!session_id () ) session_start();

require_once '../app/init.php';

$app = new App;
$aku = new Controller;
