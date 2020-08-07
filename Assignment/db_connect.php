<?php
$connection = mysqli_connect('localhost', 'root', '','library',3308);
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'library');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}