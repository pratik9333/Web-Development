<html>
	<head>
		<title>
			Insert Records
		</title>
		<link rel="stylesheet" href="login.css">
	</head>
	<body>
		<center>
		<div class="box" style="padding-top: 8px;margin-top: 211px;">
		<form action="Insert.php" method="post">
		<h2>Insert Student Records</h2>
			<table style="font-family:comic sans ms;">
				<tr>
					<td>
						<input type="text" title="Must contain only uppercase,lowercase characters and whitespaces" name="name" pattern="^[a-zA-Z\s]+$" placeholder="Enter Name" required/>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="phone" placeholder="Enter Mobile Number" maxlength="10" pattern="[7-9]{1}[0-9]{9}"required/>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="email" placeholder="Enter E-Mail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
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
						<center><input type="submit" name="submit" value="Insert" STYLE="padding:7px;margin-top: 11px;width:101px;background-color:cornflowerblue;color:white;border-radius:20px;border:1px solid black;"/></center>
					</td>
				</tr>
			</table>
		</form>
		<a href="UpdateRecords.php"><label style="color:red"> Click here to Update Records</label></a><br>
		<a href="ShowRecords.php"><label style="color:red;margin-left: -23px;"> Click here to See Records</label></a><br>
		<a href="DeleteRecords.php"><label style="color:red;margin-left: -6px;"> Click here to Delete Records</label></a>
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
		$ins="insert into studenttable(Name,MobileNo,Email,Birthday,PinCode) values('$name','$phone','$email','$birthday','$pin')";
		$status1=mysqli_query($con,$ins);
		if($status1)
		{
			echo '<script type="text/JavaScript">  
			alert("Records Inserted!"); 
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