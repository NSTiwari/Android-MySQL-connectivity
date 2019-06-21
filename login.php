<?php
require "conn.php";
$user_name="123";
$user_pass="123";
$mysql_qry="SELECT * FROM register WHERE Username='$user_name' AND Password='$user_pass';";
$result=mysqli_query($conn,$mysql_qry);
if(!$result||mysqli_num_rows($result)>0){
echo "Login success";
}
else{
echo "Login not success";
}
?>