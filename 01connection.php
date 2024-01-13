<?php


$server = "localhost";
$username = "root";
$pass = "";
$db = "myTodoApp";


$con = mysqli_connect($server, $username, $pass,$db);




// if (!$con) {
//     die("connection failed" . mysqli_connect_error());
// } else {
//     echo "connected";
// }




$dbsql = "CREATE DATABASE IF NOT EXISTS " . $db;


$res = mysqli_query($con, $dbsql);



// if ($res) {

//     echo "db is created ";
// }
