<?php
$host = 'db';
$user = 'albs_user';
$pass = 'albs_password';
$db = 'albs_db';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>