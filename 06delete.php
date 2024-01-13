

<?php

require "01connection.php";

if (isset($_GET["delete"])) {

    $id = $_GET["delete"];




    $delsql = "delete from info where Id ='$id'" ;
    $res = mysqli_query($con, $delsql);

}




?>