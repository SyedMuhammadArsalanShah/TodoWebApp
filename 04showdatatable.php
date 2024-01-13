
<?php

require "01connection.php";

$query = "select * from info";


$res = mysqli_query($con, $query);



if ($res) {

   $christy=0;
   while ($item = mysqli_fetch_assoc($res)) {
      $christy++;
      echo "<tr> <td>" . $christy . "</td>";
      echo " <td>" . $item["name"] . "</td>";
      echo " <td>" . $item["title"] . "</td>";
      echo " <td>" . $item["Description"] . "</td>";
      echo " <td>" . $item["Date"] . "</td>";
      echo " <td><button type='button' data-bs-toggle='modal' data-bs-target='#updateModal' class='btn btn-success update' id=". $item["Id"].">Update</button>
    <button type='button' class='btn btn-danger delete'  id=d". $item["Id"].">Delete</button></td></tr>";
   }
}







?>


