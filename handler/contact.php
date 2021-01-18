<?php
include("../partials/connect.php");

//Fetching the data from the contact form
$email=$_POST["email"];

echo $email;

$msg=$_POST["msg"];

//Sending data to database: below contact form with designated names connected to variables made in this form
$sql="INSERT INTO contact (email,msg) VALUES('$email','$msg')";

/*
if (!$connect->query($sql)) {

    echo('Invalid query: ' . $connect->error);

}else{

echo "Data Inserted";

}
*/
$connect->query($sql);

?>