<html>
	<head>
		<link rel="stylesheet" href="login.css">
	</head>
	<body style="background: url(RentImg.jpg);">
		<br><br><br><br><br><br><br><br><br>
		<center>
			<div class="box">
			<h2> Update Records</h2>
		<form action="UpdateRecords.php" method="post">
		<table style="font-family:comic sans ms;">
				<tr>
					<td>
						<input type="text" name="email" placeholder="Enter E-Mail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="phone" placeholder="Enter Mobile Number" maxlength="10" pattern="[7-9]{1}[0-9]{9}"required/>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" title="Must contain only uppercase,lowercase characters and whitespaces" name="name" pattern="^[a-zA-Z\s]+$" placeholder="Enter Name" required/>
					</td>
				</tr>
				<tr>
					<td>
						<input type="date" id="birthday" name="birthday"/>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" maxlength="6" name="pin" pattern="[0-9]{6}" placeholder="Enter Pin Code" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<center><input type="submit" name="submit" value="Update" STYLE="padding:7px;margin-top: 11px;width:101px;background-color:cornflowerblue;color:white;border-radius:20px;border:1px solid black;"/></center>
					</td>
				</tr>
			</table>
		</form>
		<a href="ShowRecords.php"><label style="color:red"> Click here to See Records</label></a><br>
		<a href="Insert.php"><label style="color:red;margin-left: 10px;"> Click here to Insert Records</label></a><br>
		<a href="DeleteRecords.php"><label style="color:red;margin-left: 15px;"> Click here to Delete Records</label></a>
		</div>
		</center>
	</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$birthday=$_POST['birthday'];
	$pin=$_POST['pin'];
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"form");
	if ($con->connect_error)
	{
		die("Connection failed: " . $con->connect_error);
	}
	else
	{
		$ins="update studenttable set Name='$name',MobileNo='$phone',Birthday='$birthday',PinCode=$pin where Email='$email'";
		$status2=mysqli_query($con,$ins);
		if($status2)
		{
			echo '<script type="text/JavaScript">  
			alert("Records Updated!"); 
			</script>' ;
		}
		else
		{
			echo '<script type="text/JavaScript">  
			alert("Failed!"); 
			</script>' ;
		}
	}
}
?>