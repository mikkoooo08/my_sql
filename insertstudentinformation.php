<?php
require "connection.php";

$Name = isset($_POST["name"]) ? $_POST["name"] : '';;
$LName = isset($_POST["lastname"]) ? $_POST["lastname"] : '';;
$Course = isset($_POST["course"]) ? $_POST["course"] : '';;
$Age = isset($_POST["age"]) ? $_POST["age"] : '';;



$sql = "insert into studentinfo (firstname,lastname,course, age) values ('$Name','$LName','$Course','$Age');";

if(mysqli_query($con,$sql))
{

echo "Succesfully Recorded!";

}
else
{
echo "Insert Failed ..." .mysqli_error($con) ;

}
?>