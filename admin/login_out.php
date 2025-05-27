<?php
session_start();
include("db_connection.php");
$emali = $_POST["email"];
$pass = $_POST["password"];
$query = "SELECT * FROM `login_tbl` WHERE `emali`='$emali' and `pass`='$pass'";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
    echo "login successfully...!";
    $_SESSION["login"] = 1;
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "login successfully...!";
}
?>