
<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="auditsystem";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){ 
    die("Could not connect to db".msql_error());
}