<?php
$con = mysqli_connect('localhost', 'root', '', 'eazy_shops', 3306);
if(!$con){
    die("Database connection error! " .mysqli_connect_error());
}