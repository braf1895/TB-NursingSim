<?php
session_start();
include "config.php"; #Config file for MySQL connection.

if(isset($_POST['but_submit'])){ #Checks to see if the POST data was set.

    $uname = mysqli_real_escape_string($conn,$_POST['User_Name']); #The POST'd user name
    $password = mysqli_real_escape_string($conn,$_POST['User_Password']); #The POST'd user passowrd.

      $sql_querry = "select id from students where uName='".$uname."' and class='".$password."'"; #Checks to see if the supplied user and pass is a student.
      $result = $conn->query($sql_querry);

      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $_SESSION['idNum'] = $row["id"];
      }
      $_SESSION['isAdmin'] = false;
    } else {
      $sql_querry = "select id from admins where uName='".$uname."' and pass='".$password."'";
      $result = $conn->query($sql_querry);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $_SESSION['idNum'] = $row["id"];
        }
        $_SESSION['isAdmin'] = true;
      }else{
        echo "Invalid input!";
      }
    }
  }

?>
