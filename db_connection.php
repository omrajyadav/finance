<?php
$servername ="localhost";
$username ="root";
$password ="";  
$dbname="ifintech";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection.error";
}
?>