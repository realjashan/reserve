 <?php


$host="localhost";
$username="root";
$password="";
$database="unimaster";

$con=mysqli_connect($host,$username,$password,$database);
$sql="select * from product";
$result=mysqli_query($con,$sql);

echo "<table> <tr> <td>ProductId </td> <td>ProductName </td> <td>Price </td> </tr>";

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "<tr> <td> $row[ProductId] </td> <td> $row[ProductName] </td> <td> $row[Price] </td> </tr>";


}

echo "</table>";
?>
