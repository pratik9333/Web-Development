<html>
	<head>
		<link rel="stylesheet" href="login.css">
	</head>
	<body style="background: url(StudentImg.jpg);">
		<center>
			<br><br><br><br><br><br><br><br><br><br>
			<div class="box" style="background-color: ghostwhite;">
			<h2>Student Delete Form</h2>
		<form action="DeleteRecords.php" method="post">
		<table>
			<tr>
				<td> <input type="text" name="email" placeholder="Enter Email Id"  required/> </td>
			</tr>
			<tr>
				<td colspan="1"> <center><input type="submit" name="Delete" value="Delete" STYLE="padding:7px;margin-top: 11px;width:101px;background-color:cornflowerblue;color:white;border-radius:20px;border:1px solid black;" /></center> </td>
			</tr>
		</table>
		<a href="ShowRecords.php"><label style="color:red"> Click here to See Records</label></a><br>
		<a href="Insert.php"><label style="color:red;margin-left: 10px;"> Click here to Insert Records</label></a><br>
		<a href="UpdateRecords.php"><label style="color:red;margin-left: 17px;"> Click here to Update Records</label></a>
		</form>
			</div>
		</center>
	</body>
</html>
<?php
if(isset($_POST['Delete']))
{
	$rn1=$_POST['email'];
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"form");
	if ($con->connect_error)
	{
		die("Connection failed: " . $con->connect_error);
	}
	$q="delete from studenttable where Email='$rn1'";
	$status=mysqli_query($con,$q);
	if($status==1)
	{
		echo '<script type="text/JavaScript">  
		alert("Records Deleted!"); 
		</script>' ;
	}
	else
	{
		echo '<script type="text/JavaScript">  
		alert("Records Failed to Delete"); 
		</script>' ;
	}
}
?>
