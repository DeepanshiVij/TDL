<?php

session_start();

$conn = new mysqli('localhost','root','','userregistration');

$user = $_POST['user'];
$password = $_POST['password'];

if ($user=="admin" and $password=="admin")
{   header('location:ff.php');
}
else
{   header("Location:false.php");
}
$conn->close();
?>