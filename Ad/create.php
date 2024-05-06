<?php
$dbhost = "localhost";
$dbname = "StaffBD";
$username = "root";
$password = "";
//print_r($_FILES);
if (isset($_POST["person"]) && isset($_POST["job"]) && isset($_POST["phone"]) && isset($_FILES['userfile']['name'])) {
$conn = new mysqli($dbhost,$username,$password,$dbname);
if($conn->connect_error) {
    die("Mistake" . conn->connect_error);
}

$uploaddir = "../image/";
$name = date("hisY") .".png";
$uploadfile = $uploaddir . $name ;
print_r($_FILES);
//echo $type;
//echo $uploadfile . "\n";
//echo " ". basename($_FILES['userfile']['tmp_name'])."\n";
//if(is_uploaded_file($_FILES['userfile']['tmp_name']))echo "File Uploaded!\n";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}


$pname = $conn->real_escape_string($_POST["person"]);
$pjob = $conn->real_escape_string($_POST["job"]);
$pnumber = $conn->real_escape_string($_POST["phone"]);

$sql = "INSERT INTO user (name, job, phonenumber) VALUES ('$pname', '$pjob','$pnumber')";
$sql1 = "INSERT INTO ImgBD (image) VALUES ('".$name."')";

if ($conn->query($sql) && $conn->query($sql1)) {
    echo "Succesful";
} else {
    echo "Error : " . $conn->error;
}
$conn->close();
header("Location: ../index.php");
} else {
    echo "Error : ";

}

?>