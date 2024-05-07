<?php
$dbhost = "localhost";
$dbname = "StaffBD";
$username = "root";
$password = "";

if (isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["password"])) {
$conn = new mysqli($dbhost,$username,$password,$dbname);
if($conn->connect_error) {
    die("Mistake" . conn->connect_error);
}
//echo $_POST["delete"];

$rname = $_POST["lname"];
$remail= $_POST["email"];
$rpassword = $_POST["password"];

$members = $conn->query("SELECT * FROM member");

foreach($members as $m) {
    if ($m["email"] == $remail) {
        die("Email already exist");
    } 
    if ($m["login"] == $rname) {
        die("Name already exist");
    } 
}

$sql = "INSERT INTO member (login, email, password,influence) VALUES ('$rname', '$remail','$rpassword','0')";

if($conn->query($sql)) {
    header("Location: index.php");
} else {
    die("Mistake" . $conn->error);
}

$conn->close();
} else {
    echo "Error : ";
}
?>