<?php
$dbhost = "localhost";
$dbname = "StaffBD";
$username = "root";
$password = "";

if (isset($_POST["email"]) && isset($_POST["password"])) {
$conn = new mysqli($dbhost,$username,$password,$dbname);
if($conn->connect_error) {
    die("Mistake1" . conn->connect_error);
}



$remail= $_POST["email"];
$rpassword = $_POST["password"];

$members = $conn->query("SELECT * FROM member");

foreach($members as $m) {
    if ($m["email"] == $remail) {
        if ($m["password"] == $rpassword) {
            echo 'We set coockie!';
            $val = $m['login'];
            setcookie("data",$val,time() + 3600 * 24,'/');
        } else {
        die("Mistake" . $conn->error);
        }
    }
}


$conn->close();

header("Location: ../index.php");
} else {
    echo "Error : ";
}

?>