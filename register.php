<?php
require "conn.php";
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$city=$_POST["city"];
$mysql_qry="INSERT INTO register(name,email,phone,city)VALUES('$name','$email','$phone','$city')";

if($conn->query($mysql_qry)===TRUE){
echo "Data inserted successfully";
}
else{
echo "Error" . $mysql_qry . "<br>" . $conn->error;
}
$conn->close();
?>