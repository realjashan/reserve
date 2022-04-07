<?php
$id1=$_POST['productid'];
$name=$_POST['productname'];
$price=$_POST['price'];

$host="localhost";
$username="root";
$password="";
$database="unimaster";

$con=mysqli_connect($host,$username,$password,$database);
$sql="insert into product values('$id1','$name','$price')";
$result=mysqli_query($con,$sql);
?>
