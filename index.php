<?php

require_once "vendor/autoload.php";
use App\Controllers\Student;

$stu = new Student;

if(isset($_GET['delete_id'])){

	$deleteid = $_GET['delete_id'];

	$stu -> deleteStudent($deleteid);
	
}


if(isset($_GET['view_id'])){

	$view_id = $_GET['view_id'];

	
	
}


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



    <div class="wrap-table">
        <a href="create.php" class="btn btn-success">Create Student</a>
        <div class="card shadow">
            <div class="card-body">
                <h2>All Data</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Cell</th>
                            <th>User Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
		
							$data = $stu -> allstudent();
							
							$i = 1;
							while($singledata = $data -> fetch_object()) :
		
						?>


                        <tr>
                            <td><?php echo $i; $i++; ?></td>
                            <td><?php echo $singledata -> name ;?></td>
                            <td><?php echo $singledata -> email ;?></td>
                            <td><?php echo $singledata -> cell ;?></td>
                            <td><?php echo $singledata -> uname ;?></td>
                            <td>
                                <a class="btn btn-sm btn-info" href="?view_id=<?php echo $singledata -> id ;?>">View</a>
                                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                <a class="btn btn-sm btn-danger"
                                    href="?delete_id=<?php echo $singledata -> id ;?>">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile;?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?php 
   if(isset($_GET['view_id'])) :
   ?>
    <div class="container">
        <div class="card w-75 mx-auto mt-5 bg-dark text-light">

            <?php
		
							

		$allview = $stu -> viewStudent($view_id);
		
		$i = 1;
		while($singleview = $allview -> fetch_object()) :

	?>
            <div class="card-header">

                <h2><?php echo $singleview -> name ;?></h2>

            </div>
            <div class="card-body">


                <table class="table text-center text-light">


                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Name</th>
                        </tr>
                    </thead>



                    <tbody>




                        <tr>
                            <td><?php echo $singleview -> name ;?></td>
                            <td><?php echo $singleview -> email ;?></td>
                            <td><?php echo $singleview -> uname ;?></td>
                        </tr>

                        <?php endwhile;?>

                    </tbody>




                </table>

            </div>

        </div>
    </div>

    <?php endif;?>



    <!-- JS FILES  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>