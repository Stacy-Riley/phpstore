<?php	

$dbhost='localhost:8889';
$dbuser ='root';
$dbpassword ='root';
$dbdatabase= 'phpstore';

$connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdatabase);


if (!$connect) {


   die("Connection failed: " . mysqli_connect_error());


}else{


  echo "Connected successfully";
}

?>