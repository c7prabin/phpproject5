<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="student";
$conn= mysqli_connect($servername, $username, $password,$dbname);
//database selection
if(!mysqli_select_db($conn, $dbname))
{
    die("selection error");
}