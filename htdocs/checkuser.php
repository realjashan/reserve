<?php

$user=$_POST['username'];
$pass=$_POST['password'];

$host="localhost";
$username="root";
$password="";
$database="unimaster";
$con=mysqli_connect($host,$username,$password,$database);


$sql="select * from user where userid='$user' and password='$pass'";
$result = mysqli_query($con,$sql);
//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count>=1)
{
 echo "valid";
}
else{
 echo "invalid";
}

?>