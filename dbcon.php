<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'school_portal';

    $conn = new mysqli("$host","$user","$pass","$dbname");
   
    // Check connection
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }
?>