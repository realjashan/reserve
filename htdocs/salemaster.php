<?php
$cust=$_POST['customerid'];
$date=$_POST['saledate'];
$id=$_POST['saleid'];
echo $date;
$host="localhost";
$username="root";
$password="";
$database="unimaster";

 
 
   

$con=mysqli_connect($host,$username,$password,$database);
$sql="insert into salemaster values('$id','$date','$cust')";
$result=mysqli_query($con,$sql);
?>
