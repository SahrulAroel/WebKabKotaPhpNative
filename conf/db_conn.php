<?php
    define('DB_SERVER', 'localhost');
    define('DB_NAME', 'db_kab_kota');    
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');

    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$conn ) {
        die("Connection failed: " . mysqli_connect_error());
    }