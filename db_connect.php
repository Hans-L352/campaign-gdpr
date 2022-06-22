<?php
// pripojeni k databazi
$connection = mysqli_connect('localhost', 'root124221', 'toor123453209988');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
// vybrani databaze
$select_db = mysqli_select_db($connection, 'bc_prace');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?> 
