<?php
$servername  =  "localhost";
$username    =  "root";
$password    =  "";
$dbname      = "test";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "connection ok";
}
else
{
    echo "connection falied".mysqli_connect_error();
}