<?php
include("../partials/connect.php");

//Fetching the data from the contact form
$category=$_POST['name'];

//Sending data to database: below contact form with designated names connected to variables made in this form
$sql="INSERT INTO categories(name) VALUES('$category')";

$connect->query($sql);

/*
if (!$connect->query($sql)) {

    echo('Invalid query: ' . $connect->error);

}else{

echo "Data Inserted";

}
*/
?>