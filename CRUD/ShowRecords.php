<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"form");
$q="select * from studenttable";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<html>
	<head>
		<title>Show Records</title>
		<style>
		table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		}
		th, td {
		padding: 5px;
		}
		th {
		text-align: left;
		}
</style>
		
	</head>
	<body style="background-color: black;">
		<a href="UpdateRecords.php"><label style="color:red"> Click here to Update Records</label></a><br>
		<a href="Insert.php"><label style="color:red;margin-left: -0px;"> Click here to Insert Records</label></a><br>
		<a href="DeleteRecords.php"><label style="color:red;margin-left: -0px;"> Click here to Delete Records</label></a>
		<center>
		<center><h1 style="color: aliceblue;">Displaying Books</h1></center>
		<center><table style="width:100%; background-color: aliceblue;"/>
			<tr>
				<th>Name</th>
				<th>MobileNO</th>
				<th>Email</th>
				<th>Birthday</th>
				<th>PinCode</th>
			</tr>
			<?php
				for($i=1;$i<=$num;$i++)
				{
					$row=mysqli_fetch_array($result);
			?>
			<tr>
				<td><?php echo $row['Name'] ?></td>
				<td><?php echo $row['MobileNo'] ?></td>
				<td><?php echo $row['Email'] ?></td>
				<td><?php echo $row['Birthday'] ?></td>
				<td><?php echo $row['PinCode'] ?></td>
			</tr>
			<?php
				}
			?>
		</table></center>
		</div>
		
		</center>
	</body>
</html>