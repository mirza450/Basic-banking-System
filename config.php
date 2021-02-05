<?php
$db_name="sparksbank";
$sql_name="root";
$sql_pass="root";
$server_name="localhost";
$con=mysqli_connect($server_name,$sql_name,$sql_pass,$db_name);

if(!$con){
    echo"Database Connection Error...".mysqli_connect_error();
} 
