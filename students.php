<html>
<head>
  <title>Students</title>
</head>
<body>
<?PHP
  session_start();
  include "config.php";
  if (true) { #$_SESSION["isAdmin"] *Make sure that you reenable the session check!
    echo "Access Granted";
  }else{
    echo "Access Denied";
    echo "<script>setTimeout(\"location.href = 'http://www.google.com';\",1500);</script>";
  }
  $SQL_QUERRY = "select * from nursing.students";
  $RES = $conn->query($SQL_QUERRY);
  ?>
  <h3>Students</h3>
  <table>
    <tr>
      <td>Last Name</td>
      <td>First Name</td>
      <td>Class</td>
      <td>Average Score</td>
      <td>Simulations completed</td>
      <td>Delete</td>
    </tr>
  <?PHP
  while($row=$RES->fetch_assoc()){
    ?>
      <tr>
        <form action="deleteStudent.php" method="post">
                   <input type="hidden" name='id' value='<?PHP echo $row['id'];?>'>
                   <td><?php echo $row['lName'];?></td>
                   <td><?php echo $row['fName'];?></td>
                   <td><?php echo $row['class'];?></td>
                   <td><?php echo $row['avgScore'];?></td>
                   <td><?php echo $row['completedSims'];?></td>
                   <td><button type="submit" name="btn-delete" class="btn btn-primary">Delete</button></td>
        </form>
                 </tr>
    <?php }
?>
</table>
<br>
<h3>Add Student</h3>
<form method='post' action='addStudent.php'>
  <label>First Name</label>
  <input type="text" id="fName" name="fName" placeholder="First Name">
  <label>Last Name</label>
  <input type="text" id="lName" name="lName" placeholder="Last Name">
  <label>Class</label>
  <input type="text" id="class" name="class" placeholder="Class">
  <label>User Name</label>
  <input type="text" id="uName" name="uName" placeholder="User Name">
  <button type="submit" name="but_submit" class="btn btn-primary">Submit</button>
</form>
<h3> Delete Class</h3>
  <form method='post' action='deleteClass.php'>
    <label>Class Number</label>
    <input type="text" id="ClassNum" name="ClassNum" placeholder="Class Number">
    <button type='submit' name="but_submit" class="btn btn-primary">Delete Class</button>
  </form>
  <h4> WARNING: This will delete the entire class!</h4>
</body>
</html>
