<?php
$host = "localhost";
$user = "root";
$password =  "";
$db = "studentrecord";

$con = mysqli_connect($host,$user,$password,$db);

$stmt = $con->prepare("SELECT id, firstname, lastname, course, age FROM studentinfo;");

$stmt->execute();

$stmt->bind_result($id, $firstname, $lastname, $course, $age);

$studentinfo = array();

while ($stmt->fetch()) {
	$temp = array();
	$temp ['id'] = $id;
	$temp ['firstname'] = $firstname;
	$temp ['lastname'] = $lastname;
	$temp ['course'] = $course;
	$temp ['age'] = $age;

	array_push($studentinfo, $temp);
}

echo json_encode($studentinfo);

?>