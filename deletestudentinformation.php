<?php
$host = "localhost";
$user = "root";
$password =  "";
$db = "studentrecord";

$con = mysqli_connect($host,$user,$password,$db);

$name = isset($_POST["firstname"]) ? $_POST["firstname"] : '';;

$sql = "DELETE FROM `studentinfo` WHERE firstname = '$name'";

$result = mysqli_query($con,$sql);

if($result)
{

echo "Succesfully Deleted";

}
else
{
echo "Failed to Delete!";
}
?>