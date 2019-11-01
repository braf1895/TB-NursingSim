<?php
  include "config.php";
  $studentID = intval($_POST['id']);
  $SQL_QUERRY="DELETE FROM students WHERE id='$studentID'";
  if($conn->query($SQL_QUERRY) === TRUE){
    echo "Student Deleted!" ;
  }else{
    echo "Braf sucks at coding." ;
    echo $conn->error;
  }
 ?>
