<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$DBname = 'shopping_cart';

$conn = new mysqli($serverName,$username,$password,$DBname);
mysqli_query($conn,'SET NAMES utf8;');

if ($conn -> connect_error) {
  die('Connection failed : ' . $conn -> connect_error);
}
