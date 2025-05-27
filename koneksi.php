<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_service_gadget_pwl';

$conn = mysqli_connect(hostname: $host, username: $user, password: $password, database: $database);

mysqli_select_db($conn, $database) or die('Database tidak ditemukan!');
?>