<?php

$host="localhost";
$username="root";
$password="";
$database="unimaster";

$con=mysqli_connect($host,$username,$password,$database);
$sql="select * from customer";
$result=mysqli_query($con,$sql);



while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
   
 
 $r[] = array(
    'id' => $row['CustomerID']
  );

}

echo json_encode($r);

?>