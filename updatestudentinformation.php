<?php
$host = "localhost";
$user = "root";
$password =  "";
$db = "studentrecord";

$con = mysqli_connect($host,$user,$password,$db);

$firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : '';;
$lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : '';;
$course = isset($_POST["course"]) ? $_POST["course"] : '';;
$age = isset($_POST["age"]) ? $_POST["age"] : '';;


$sql = "UPDATE `studentinfo` SET `firstname`='$firstname',`lastname`='$lastname',`course`='$course',`age`='$age' WHERE `firstname`='$firstname'";

$result = mysqli_query($con, $sql);

if ($result) {
	echo "Data Updated!";
}else{
	echo "Update Failed!";
}
?>