<?php
session_start();
     if(isset($_SESSION['uid']))
	 {
	 echo "";
	 }
	 else
	 {
	 header('location: ../login.php');
	 }

     include('header.php');
	 include('titlehead.php');

?>
 

<form action="addstudent.php" method="post" enctype="multipart/form-data">
<table border="1" align="center" style="width:80%;margin-top:40px;">
 
 <tr>
 	<th>Name</th>
	<td><input type="text" name="name" placeholder="Enter Name" required /></td>
 </tr>
 <tr>
 	<th>Roll No.</th>
	<td><input type="text" name="rollno" placeholder="Enter Rollno"  required /></td>
 </tr>
 <tr>
 	<th>City</th>
	<td><input type="text" name="city" placeholder="Enter City"  required/></td>
 </tr>
 <tr>
 	<th >Parents Contact Number</th>
	<td><input type="text" name="pcon" placeholder="Enter Parents Contact Number"  required/></td>
 </tr>
 <tr>
 	<th>Standard</th>
	<td><input type="number" name="std" placeholder="Enter Standard" /></td>
 </tr>
<tr>
 	<th>Image</th>
	<td><input type="file" name="simg" /></td>
 </tr>
 <tr>
  <td colspan="2" align="center"> <input type="submit"  name="submit" value="Submit"/></td>
 </tr>
 </table>
 </form>
 </body>
 </html>
 
 
 
 <?php
 
  if (isset($_POST['submit']))
  {
    include('../dbcon.php');
  $rollno = $_POST['rollno'];
  $name = $_POST['name'];
  $city = $_POST['city'];
  $pcon = $_POST['pcon'];
  $std = $_POST['std'];
  $imgname = $_FILES['simg']['name'];
  $tempname = $_FILES['simg']['tmp_name'];
  move_uploaded_file($tempname,"../dataimg/$imgname");
  
  $qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`,`image`) VALUES ('$rollno','$name','$city','$pcon','$std','$imgname')";
  
  
  $run= mysqli_query($con,$qry);
  if($run == true)
  {
  ?>
  <script>
  alert('Data inserted successfully');
  </script> 
  <?php   
  }
  }
 
 ?>
 