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
	 include('..//dbcon.php');
	 $sid = $_GET['sid'];
	$sql="SELECT * FROM `student` WHERE id ='$sid'";
	$run = mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($run);
?>

<form action="updatedata.php" method="post" enctype="multipart/form-data">
<table border="1" align="center" style="width:80%;margin-top:40px;">
 
 <tr>
 	<th>Name</th>
	<td><input type="text" name="name" value=<?php echo $data['name'];?> required /></td>
 </tr>
 <tr>
 	<th>Roll No.</th>
	<td><input type="text" name="rollno" value=<?php echo $data['rollno'];?>  required /></td>
 </tr>
 <tr>
 	<th>City</th>
	<td><input type="text" name="city" value=<?php echo $data['city'];?>  required/></td>
 </tr>
 <tr>
 	<th >Parents Contact Number</th>
	<td><input type="text" name="pcon" value=<?php echo $data['pcont'];?>  required/></td>
 </tr>
 <tr>
 	<th>Standard</th>
	<td><input type="number" name="std" value=<?php echo $data['standard'];?> /></td>
 </tr>
<tr>
 	<th>Image</th>
	<td><input type="file" name="simg" /></td>
 </tr>
  <input type="hidden" name="sid" value="<?php echo $data['id'];?>" />
 <tr>
  <td colspan="2" align="center"> <input type="submit"  name="submit" value="Submit"/></td>
 </tr>
 </table>
 </form>
 </body>
 </html>
 