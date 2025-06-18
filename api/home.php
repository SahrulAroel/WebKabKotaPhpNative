<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_error', 1);

// Set headers for CORS and JSON response
Header('Access-Control-Allow-Origin: *');
Header('Content-Type: application/json');
Header('Access-Control-Allow-Method: GET');

// Include database configuration and kabkota model
include_once('conf/db_config.php');
include_once('model/kabkota.php');

// Initialize database connection
$database = new Database;
$db = $database->connect();

// Create kabkota instance and call home method
$kabkota = new KabKota($db);
$data = $kabkota->home();

// Return JSON response
echo json_encode(['message' => $data, 'data' => null]);