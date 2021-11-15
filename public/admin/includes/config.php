<?php
define('DB_SERVER','81.19.215.8');
define('DB_USER','african2');
define('DB_PASS' ,'VGE17dV(7b!t8b');
define('DB_NAME','african2_db');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>