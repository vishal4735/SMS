<?php
if (isset($_POST['submit']))
  {
    include('../dbcon.php');
  $rollno = $_POST['rollno'];
  $name = $_POST['name'];
  $city = $_POST['city'];
  $pcon = $_POST['pcon'];
  $std = $_POST['std'];
  $id = $_POST['sid'];
  $imgname = $_FILES['simg']['name'];
  $tempname = $_FILES['simg']['tmp_name'];
  move_uploaded_file($tempname,"../dataimg/$imgname");
  
  $qry = "UPDATE `student` SET `id` = '$id', `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `standard` = '$std',`image` = '$imgname' WHERE `student`.`id` = '$id'";
  
  
  $run= mysqli_query($con,$qry);
  if($run == true)
  {
  ?>
  <script>
  alert('Data Updated successfully');
  window.open('updateform.php?sid=<?php echo $id;?>','_self');

  </script> 
  <?php
  }
  }
?>