<?php
session_start();
include "database-connection.php";
$sid =  $_GET['sid'];
	$result = mysqli_query($dbcon,"SELECT r.course_id AS id, c.title as coursename, c.unit as unit, c.course_lecturer as lecturer, c.semester as semester FROM courses c, course_registered r WHERE r.sid = '$sid' AND r.course_id = c.course_id AND r.status = 0");
//echo $student;
if (mysqli_num_rows($result) > 0) {
	$json = array();
	 while ($row = mysqli_fetch_assoc($result))
        {
		 $json[] = $row; 
        }
	$response = array(
		"data" => $json
	);

	echo json_encode($response);
} else {
    $json = array();
	$response = array(
		"data" => $json
	);
	echo json_encode($response);
}

mysqli_close($dbcon);

?>
       