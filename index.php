<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Student Management System</title>
</head>
<body>
<h3 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h3>
<h1 align="center">Welcome to student management system</h1>
<form method="post" action ="index.php">
<table style="width:30%" align="center" border="1">
    <tr> 
	    <td colspan="2" align="center">Student Information</td> 
	</tr>
	<tr>
	    <td align="left">Choose Standard</td>
        <td>
			<select name="std">
				<option value="1">1st</option>
				<option value="2">2nd</option>
				<option value="3">3rd</option>
				<option value="4">4th</option>
				<option value="5">5th</option>
				<option value="6">6th</option>
			</select>
		</td>		
	</tr>
	<tr>
	    <td>Enter RollNo.</td> 
		<td><input type="text" name="rollno"></td>
	</tr>
	<tr>
	    <td colspan="2" align="center"><input  type="submit" name="submit" value="Show Information"></td>
	</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
	{
		$standard = $_POST['std'];
		$rollno = $_POST['rollno'];
		 include('dbcon.php');
		 include('function.php');

        showdetails($standard,$rollno);
	 }

?>
