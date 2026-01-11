<?php
include 'php/db.php';
$conn = connection();
echo $conn ? "Connected successfully!" : "Connection failed.";
?>

