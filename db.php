<?php

$conn = mysqli_connect("localhost","root","","appointment");

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>