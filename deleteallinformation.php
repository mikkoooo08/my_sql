<?php
$host = "localhost";
$user = "root";
$password =  "";
$db = "studentrecord";

$con = mysqli_connect($host,$user,$password,$db);

$sql = "DELETE FROM `studentinfo`";

$result = mysqli_query($con,$sql);

if($result)
{

echo "Succesfully Deleted All";

}
else
{
echo "Failed to Delete!";
}
?>