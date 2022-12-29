<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "contraseña"; /* Password */
$dbname = "Proyecto_FLP"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}




?>