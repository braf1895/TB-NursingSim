<?php
  include "config.php";
  $classNum = $_POST['ClassNum'];
  $SQL_QUERRY="DELETE FROM students WHERE class='$classNum'";
  if($conn->query($SQL_QUERRY) === TRUE){
    echo "Class Deleted!";
  }else{
    echo $conn->error;
  }
 ?>
