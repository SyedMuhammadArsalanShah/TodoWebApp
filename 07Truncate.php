




<?php
require"01connection.php";
if (isset($_POST["delbtn"])) {
    



    $delsql = "truncate table info " ;
    $res = mysqli_query($con, $delsql);

    if ($res) {
        header("location:index.php");
    }
}







?>