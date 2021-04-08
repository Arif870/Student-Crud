<?php

	require_once "vendor/autoload.php";
	use App\Controllers\Student;

	$stu = new Student;
	

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Development Area</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <?php

	if(isset($_POST['submit']) ){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$uname = $_POST['uname'];

		$stu -> studentinsert( $name, $email, $cell, $uname );
		
	}
?>


    <div class="wrap ">
        <a href="index.php" class="btn btn-success">All Students</a>
        <div class="card shadow">
            <div class="card-body">
                <h2>Sign Up</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input name="name" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Cell</label>
                        <input name="cell" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input name="uname" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <input id="submit" name="submit" class="btn btn-primary" type="submit" value="Add Student">
                    </div>
                </form>
            </div>
        </div>
    </div>








    <!-- JS FILES  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>