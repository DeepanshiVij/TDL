<?php

session_start();

$conn = new mysqli('localhost','root','','userregistration');

$faculty = $_POST['faculty'];
$id = $_POST['id'];
$ccode = $_POST['ccode'];

$stmt = $conn->prepare("insert into facultytable(faculty, id, ccode) values(?, ?, ?)");
$stmt->bind_param("sss", $faculty, $id, $ccode);
$execval = $stmt->execute();
echo $execval;
header ("Location:true.html");
$stmt->close();
$conn->close();
?>