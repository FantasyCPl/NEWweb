
<?php


$dbhost = "localhost";
$dbname = "StaffBD";
$username = "root";
$password = "";

$db = new mysqli($dbhost,$username,$password,$dbname);


function get_person_all($filter) {
    global $db;
    if ($filter) {
        $person = $db->query("SELECT * FROM user WHERE `job`='" . $filter ."'");
    }else{
        $person = $db->query("SELECT * FROM user");
    }
    return $person;
}

function get_img($temp) {
    global $db;
    $image = $db->query("SELECT `image` FROM ImgBD WHERE id=$temp");
    return $image;
}


