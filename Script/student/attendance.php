<?php
error_reporting(0);
	session_start();
	
	include '../db.php';
	if(!$_SESSION['user_id']){
		header('location:login.php');
	}
		$dept=$_GET['sas_attendance'];
		
		if(isset($_GET['student_id'])){
			$display='block';
		} else {
				$display='none';
		}
?>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

		<style>
			#container{box-shadow:2px 2px 10px #888888;
						border-radius:20px;width:815px;}
			#class{box-shadow:2px 2px 10px #888888;
						border-radius:7px;}
			#th{background:blue;
					color:white;
					height:40px;
					text-align:center;
					}
			#th2{height:35px;}
			#th3{height:35px;
					text-align:center;
					}
			#th4{
					background:blue;
					color:white;
					height:40px;
					text-align:center;
				}
			#th5{
					height:40px;
					text-align:center;
				}

				
		</style>
	</head>
	<body>
	<?php include 'header.php'; ?>
	<br><br><br><br><br>
		<div class="container" id="container">
		<br><br>	
			<form>
				<div class="row">
					<div class="col-sm-8">
						<div class="form-group">
							<select class="form-control" id="class">
							 <?php
					include '../db.php';
					$sql=mysqli_query($conn,"SELECT * FROM sas_attendance");
					while($data=mysqli_fetch_assoc($sql)){
						echo'
						<option value="'.$data['Student_id'].'">'.$data['Status'].'">'.$data['attendance_date'].'</option>
						';
					}
				?>
							</select>
						</div>
					</div>
					<div class="col-sm-4">
							<button type="button" onclick="window.location.href='attendance.php?student_id='+document.getElementById('attendance').value"class="btn btn-block btn-primary" id="attendance">See Attendance</button>
					</div>
				</div>	
			</form>
			<br>
			<br>
			
			<div style="display:<?php echo $display;?>" id="tb">
				<table border="1" style="width:785px;">
					<tr>
						<th id="th">Student Name</th>
						<th colspan="2" id="th">Attendance Status</th>
						<th id="th">Date</th>
					</tr>

					
					<?php
					include '../db.php';
					$sql=mysqli_query($conn,"SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$db_name."' AND TABLE_NAME = '".$dept."'");
					$s=-1;
					$sum=0;
					$ttl=0;
					while($data=mysqli_fetch_assoc($sql)){
						$s++;
						if($data['COLUMN_NAME']!='attendance_id' && $data['COLUMN_NAME']!='student_id'){
							$nubmer=mysqli_fetch_array(mysqli_query($conn,"SELECT ".$data['COLUMN_NAME']." from ".$dept." WHERE student_id='".$_SESSION['user_id']."'"));
							echo '
							<tr>
						<th id="th2">'.strtoupper(str_replace("_"," ",$data['COLUMN_NAME'])).'</th>
						<th colspan="2" id="th3">'.($nubmer[0]==''?'N/A':$nubmer[0]).'</th>
						<th id="th3">100</th>
					</tr>';
					$sum=$sum+$nubmer[0];
					$ttl=$ttl+100;
						}
					}
					
				?>
					<tr>
						<th></th>
						<th id="th4">Grand Total</th>
						<th id="th4">Percentage</th>
						<th id="th4">Result : Class/Division</th>

					</tr>
					<tr>
						<th></th>
						<th id="th5"><?php echo $sum;?>\<?php echo $ttl;?></th>
						<th id="th5"><?php echo round($per,2);?>%</th>
						<th id="th5"><?php echo $div;?></th>

					</tr>
					
					
				</table>
			</div>
		</div>
		<br>
		<script>
			function mytbl(){
					$("#tb").show();
					
			}
		</script>
	</body>
	
<?php include 'footer.php'; ?>
</html>	
