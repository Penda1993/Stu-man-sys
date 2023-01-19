<?php
//error_reporting(0);
session_start();
include '../db.php';
$count_s = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM student_login"));
$count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM teacher_login"));
$count1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM student_login"));
if (!$_SESSION['teacher_id']) {
    header('location:login.php');
}

$t = mysqli_fetch_assoc(mysqli_query($conn, "select * from teacher_login where id='" . $_SESSION['teacher_id'] . "'"));
?>

<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
             <nav class="nav flex-column" style="background:#383332;width:250px;margin-top:px;padding-left:20px;padding-top:20px;">
			  <a class="nav-link active" style="color:#8a8584;text-decoration:none;"href="dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
			  <a class="nav-link active" style="color:#8a8584;text-decoration:none;"href="edit.php"><i class="fa fa-fw fa-home"></i>Edit</a>
			  <a class="nav-link" style="color:#8a8584;text-decoration:none;" href="signup.php"><i class="fa fa-fw fa-group"></i>Add Student</a>
			  <a class="nav-link" style="color:#8a8584;text-decoration:none;" href="view_student.php"><i class="fa fa-fw fa-user"></i>All Student</a>
			  <a class="nav-link" style="color:#8a8584;text-decoration:none;" href="attend.php"><i class="fa fa-fw fa-user"></i>Add Attendance</a>
			  <a class="nav-link" style="color:#8a8584;text-decoration:none;" href="view_student_attendance.php"><i class="fa fa-fw fa-pencil"></i>View Attendance</a>
			  <a class="nav-link" style="color:#8a8584;text-decoration:none;" href="select_class.php"><i class="fa fa-fw fa-pencil"></i>Add Marks</a>
			  <a class="nav-link" style="color:#8a8584;text-decoration:none;" href="notification.php"><i class="fa fa-fw fa-bell"></i>Add Notification</a>
			  
			</nav>
            </div>
            <div class="col-9">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Class name</th>
                            <th scope="col">Attendance date</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // $dept = mysqli_query($conn, "SELECT * FROM dept where id='" . $sas_attendance['class_id'] . "'");

                        // $dept_details = mysqli_query($conn, "SELECT sas_attendance.student_id, sas_attendance.dept_id, dept.dept_desc FROM sas_attendance, dept WHERE (sas_attendance.student_id = $jhdjh) AND (dept.dept_id = sas_attendance.dept_id)");



                        include '../db.php';
                        $student_login = mysqli_query($conn, "SELECT * FROM student_login where id='" . $_REQUEST['student_id'] . "'");
                        while ($student_details = mysqli_fetch_assoc($student_login)) {

                            $sas_attendance = mysqli_query($conn, "SELECT * FROM sas_attendance where student_id='" . $_REQUEST['student_id'] . "'");
                            while ($sas_attendance_details = mysqli_fetch_assoc($sas_attendance)) {

                                $dept = mysqli_query($conn, "SELECT * FROM dept where id='" . $sas_attendance_details['class_id'] . "'");
                                while ($dept_details = mysqli_fetch_assoc($dept)) {

                        ?>
                                    <tr>
                                        <td><?php echo $student_details['f_name']; ?></td>
                                        <td><?php echo $dept_details['dept_name']; ?></td>
                                        <td><?php echo $sas_attendance_details['attendance_date']; ?></td>
                                    </tr>
                        <?php
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>