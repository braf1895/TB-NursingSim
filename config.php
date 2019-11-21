<?php
//$HOST = "friend-server.horse:3308";
//$USER = "login";
//$PASS = "!auNursing2020!";
$HOST = "localhost:3306";
$USER = "newuser1";
$PASS = "test";
$DATABASE = "nursing";
$conn = new mysqli($HOST, $USER, $PASS, $DATABASE);
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
 ?>
