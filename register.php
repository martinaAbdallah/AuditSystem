<?php
// require('db.php');
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="auditsystem";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){ 
    die("Could not connect to db".msql_error());
}

$item_name =$_POST['item_name'];
$Quantity = $_POST['quantity'];

$sql = "INSERT INTO items (item_name, Quantity, Total_Cost)
VALUES ('$item_name', ' $Quantity', '$Total_Cost')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>