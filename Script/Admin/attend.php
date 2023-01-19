<?php
session_start();
include '../db.php';
if (!$_SESSION['admin_id']) {
    header('location:login.php');
}
$t = mysqli_fetch_assoc(mysqli_query($conn, "select * from admin_login where id='" . $_SESSION['admin_id'] . "'"));

?>

<?php



if (isset($_POST['submit'])) {

    $studentId = $_POST['student_id'];
    $deptId = $_POST['dept_id'];

    include '../db.php';

    $check = mysqli_query($conn, "select * from sas_attendance where student_id=$studentId and class_id=$deptId and attendance_date='" . date('Y/m/d') . "'");

    // $dept_check = mysqli_query($conn, "select * from sas_attendance where dept_name='$deptId' and attendance_date='" . date('Y/m/d') . "'");


    if (mysqli_num_rows($check) == true) {
        echo '<script>alert("Attendance Already added.")</script>';
    } else {
        mysqli_query($conn, "insert into sas_attendance (`student_id`,`class_id`,`attendance_date`,`status`) values('" . $_POST['student_id'] . "','" . $_POST['dept_id'] . "','" . date('Y/m/d') . "','present')");
        echo '<script>alert("Attendence complete.")</script>';
    }
}
?>
<html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        .has-search .form-control {
            padding-left: 2.375rem;
        }

        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;

            color: #aaa;
        }

        .has-search .form-control-feedback1 {
            position: absolute;
            z-index: 2;
            display: block;
            width: 3.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            font-size: 30px;
            color: red;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include '4sidermenu.php'; ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-4">
                <br><br><br>

                <!--container start-->
                <center>
                    <div style="border-radius:15px;height:350px; width:460px;box-shadow: 2px 2px 15px #888888;">
                        <br><br>

                        <!--user signup form start-->
                        <center>
                            <p style="font-size:32px;font:center;color:red;font-weight:bold;">SELECT CLASS</p>
                        </center>
                        <br>

                        <form action="" method="post">
                            <div style="height:200px;width:400px;">
                                <select id="dept" class="form-control" style="height:40px; border-radius:7px;font-size:18px; box-shadow: 2px 2px 15px #888888;" required name="dept_id">
                                    <?php
                                    include '../db.php';
                                    $deptsql = mysqli_query($conn, "SELECT * FROM dept");
                                    // $studentsql = mysqli_query($conn, "SELECT * FROM student_login");
                                    while ($data = mysqli_fetch_assoc($deptsql)) {
                                        echo '<option value="' . $data['id'] . '">' . $data['dept_name'] . '</option>';
                                    }
                                    ?>
                                </select>
                                <select id="dept" class="form-control mt-3" style="height:40px; border-radius:7px;font-size:18px; box-shadow: 2px 2px 15px #888888;" required name="student_id">
                                    <?php
                                    include '../db.php';
                                    $studentsql = mysqli_query($conn, "SELECT * FROM student_login");

                                    while ($data = mysqli_fetch_assoc($studentsql)) {
                                        echo '<option value="' . $data['id'] . '">' . $data['f_name'] . '</option>';
                                    }
                                    ?>
                                </select>
                                <br>
                                <button type="submit" name="submit" class="btn btn-warning" style="border-radius:10px;height:40px;font-size:20px; box-shadow: 2px 2px 15px #888888;width:400px;">MARK AS ATTENDED</button>
                                <br>
                                <br>
                            </div>
                        </form>
                    </div>
                </center>
            </main>
        </div>
    </div>

</body>

</html>