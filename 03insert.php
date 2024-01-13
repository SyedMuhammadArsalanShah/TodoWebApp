<?php


require"01connection.php";


if (isset($_POST["username"])) {

    $user = $_POST["username"];
    $title = $_POST["title"];
    $desc = $_POST["desc"];




    $sqlins = "INSERT INTO `info`(`name`, `title`, `Description`) VALUES ('$user','$title','$desc')";

    $res = mysqli_query($con, $sqlins);
    if ($res) {
        header("location:index.php");
    }
}
