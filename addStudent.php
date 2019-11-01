<?php
  include "config.php";
  $fName = $_POST['fName'];
  $lName = $_POST['lName'];
  $class = $_POST['class'];
  $uName = $_POST['uName'];
  $SQL_STMNT = "INSERT INTO students (fName, lName, class, uName) VALUES ('".$fName."','".$lName."','".$class."','".$uName."')";
  if($conn->query($SQL_STMNT) === TRUE){
    echo "success";
  }else{
    echo "Error: " . $SQL_STMNT . "<br>" . $conn->error;
  }
 ?>
