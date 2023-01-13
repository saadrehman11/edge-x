<?php
$host="localhost";
$user="root";
$password="";
$db="edge_x";
$con=mysqli_connect($host,$user, $password, $db);

if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
