<?php
include("../partials/connect.php");

//Fetching the data from the contact form
$name=$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];
$category=$_POST['category'];

$target="../uploads/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="../uploads/".$file_name;

move_uploaded_file($file_tmp, $file_store);

//Sending data to database: below contact form with designated names connected to variables made in this form
$sql="INSERT INTO products(name,price,picture,description,category_id) VALUES('$name','$price','$file_path,'$description','$category')";

$connect->query($sql);


if (!$connect->query($sql)) {
    echo('Invalid query: ' . $connect->error);
}else{
echo "Data Inserted";
}

?>