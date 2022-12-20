<?php
$server =  'localhost';
$username = 'root';
$passward = '';
$database = 'ground_wrecker';

$conn = mysqli_connect($server, $username, $passward, $database);

if (!$conn) {
    die('Error occured while connecting the database'. mysqli_connect_error());
}
?>