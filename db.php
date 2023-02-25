<?php

$con = mysqli_connect("localhost","root","","temperature");


if(!$con)
{
    die("Connection Failed: ".mysqli_connect_error());

}


?>