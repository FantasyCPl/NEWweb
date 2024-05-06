<?php
$dbhost = "localhost";
$dbname = "StaffBD";
$username = "root";
$password = "";

if (isset($_POST['delete'])) {
$conn = new mysqli($dbhost,$username,$password,$dbname);
if($conn->connect_error) {
    die("Mistake" . conn->connect_error);
}
//echo $_POST["delete"];
if($conn->query("DELETE FROM user WHERE `id` = '".$_POST['delete']."'")){
         
    header("Location: delete.php");
} else {
    die("Mistake" . $conn->error);
}





$conn->close();
} else {
    echo "Error : ";
}
?>