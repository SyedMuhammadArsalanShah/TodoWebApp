<?php


require "01connection.php";





$tablesql = "create table if not exists info(

Id int primary key not null auto_increment, 
name  varchar(255),
title varchar(255),
Description varchar(255),
Date date  default CURRENT_TIMESTAMP()
)";



$res = mysqli_query($con, $tablesql);

if ($res) {
    echo " table is created ";
} else {

    echo " table is not  created ";
}
