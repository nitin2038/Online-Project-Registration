<?php
session_start();
include 'scripts/database-connection.php';

if(!isset($_SESSION["sid"]))
{
	header("Location: login.php");
}

$id = $_SESSION["sid"];

$sql = "SELECT * FROM tbl_students WHERE sid = '$id'";
$result = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_assoc($result);

?>
<?php echo $_SESSION["sid"]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="css/staff-style.css">
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</head>
    <body>
        
         <nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
						MENU                        
					</button>
					<a href="#" class="navbar-brand"><b>PORTAL</b></a>
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav">
						<li><a href="home.php">Dashboard</a></li>
						<!-- <li><a href="#"><span class="glyphicon glyphicon-tasks"></span> Results</a></li> -->
                        <li><a href="profile.php"> Profile</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                    <li><a href=""> Welcome <b><?php echo $_SESSION["sid"]; ?></b></a></li>
                        <li><?php echo "<a href='scripts/logout-student.php'> Logout</a>"; ?></li>
					</ul>
				</div>
			</div>
		</nav>
        
        
        <div class="container">
           <div id="staff-section">
            <ol class="breadcrumb" id="top-nav">
                <li><a href="#">Dashboard</a></li>
                  
            </ol>
                <header>
                    <h1>Manage Portal</h1>
                    <!-- <?php
        $status = mysqli_query($dbcon,"SELECT status FROM course_registered WHERE sid ='$id'");
        $row = mysqli_fetch_assoc($status);
        if($row["status"] == 1){
        echo "<h3>Semester Registration: <span class='btn btn-success btn-flat'>Registered</span></h3>";
        }else{
            echo "<h3>Semester Registration: <span class='text-danger'>Not Registered</span></h3>";
        }
        ?> -->
                    <?php echo date("l jS \ F Y") ?>
                </header><br />

            <div id="admin">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well">
                            <h1 class="well-heading">Course Registration</h1>
                            
                            <h3><a href="registerCourses.php"> Register Courses</a></h3>
                        </div> 
                    </div>
                 <div class="col-sm-6">
                    <div class="well">
                        <h1 class="well-heading">Registered Courses</h1>
                        
                        <h3><a href="viewregisteredCourses.php"> View Registered Courses</a></h3>
                    </div> 
                </div>
               </div>
            </div>
            <br /><br />
            
           <a   href="printCourseForm.php?id='<?php echo $id ?>'"><button class="ms-button">Print Course Form</button></a>
            </div>
        </div>
        
        <footer>
            <p class="text-green"><b>CMR</b></p>
            <p class="text-green">&copy;2020</p>
        </footer>
        
	</body>
</html>