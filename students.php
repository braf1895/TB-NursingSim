<html>
<head>
  <title>Students</title>
</head>
<body>
<?PHP
  session_start();
  include "config.php";
  if (true) { #$_SESSION["isAdmin"]
    echo "Access Granted";
  }else{
    echo "Access Denied";
    echo "<script>setTimeout(\"location.href = 'http://www.google.com';\",1500);</script>";
  }

  $SQL_QUERRY = "select * from nursing.students";
  $RES = $conn->query($SQL_QUERRY);
  while($row=$RES->fetch_assoc()){
    ?><tr>
                   <td><?php echo $row['lName'];?></td>
                   <td><?php echo $row['fName'];?></td>
                   <td><?php echo $row['class'];?></td>
                   <td><?php echo $row['avgScore'];?></td>
                   <td><?php echo $row['completedSims'];?></td>
      </tr>
    <?php }


?>
</body>
</html>
