<?php
	session_start();
	include '../db.php';
	if(!$_SESSION['admin_id']){
		header('location:login.php');
	}
	
		if(isset($_POST['submit']))
	{
		$b=mysqli_query($conn,"insert into student_fee_mgmt(`stu_id`,`amount`, `status`) values('".$_POST['stu_id']."','".$_POST['amount']."','".$_POST['status']."')");
		
		$data=mysqli_fetch_assoc(mysqli_query($conn,"select * from admin_login where id=".mysqli_insert_id($conn).""));
		if($b)
		{
			echo '
				<script>
					alert("Fees Added Successfully");
					window.location.href="'.basename( $_SERVER["REQUEST_URI"]).'";
				</script>
			';
		}
		else
		{
			echo '
				<script>
					alert("Somethig is wrong, Failed to Add");
				</script>
			';
		}
	}
	?>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		
		<style>
				
		</style>
	</head>
	<body>
		<br><br><br>
		
		<!--container start--><center>
		<div style="border-radius:15px;height:500px; width:440px;box-shadow: 2px 2px 15px #888888;">
			<br><br>
			
			<!--user signup form start-->
			<center><p style="font-size:30px;font:center;"><span style="color:red;font-weight:bold;">STUDENT FEE</span> FORM </p></center>
			<br>
			<div style="background:;height:250px;width:380px;">
				<form method="POST">	
				<select name="select" class="form-control"  style="height:42px; border-radius:7px;font-size:20px; box-shadow: 2px 2px 15px #888888;" required>
					<option selected>Student Search By</option>
					<option>Id</option>
					<option>Name</option>
					<option>Email</option>
				</select>	
				<br><input name="stu_id" class="form-control" placeholder="Enter Id" style=" border-radius:10px;height:42px;font-size:20px; box-shadow: 2px 2px 15px #888888;" required>

				
				<br><select name="status" class="form-control"  style="height:42px; border-radius:7px;font-size:20px; box-shadow: 2px 2px 15px #888888;" required>
					<option>Paid</option>
					<option>Due</option>
				</select>

				<br><input name="amount" class="form-control" placeholder="Enter Fee" style=" border-radius:10px;height:42px;font-size:20px; box-shadow: 2px 2px 15px #888888;" required>
			
			<br><br>
			<button name="submit" type="submit" class="btn btn-warning btn-block" style="border-radius:10px;height:42px;font-size:23px; box-shadow: 2px 2px 15px #888888;">Submit</button>
			</form>	
		</div>
						
		</div><!--container end--></center>
	</body>
	</html>