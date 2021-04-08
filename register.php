<?php

session_start();

$conn = new mysqli('localhost','root','','userregistration');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$rollno = $_POST['rollno'];
$emailid = $_POST['emailid'];
$phoneno = $_POST['phoneno'];
$tdl1 = $_POST['tdl1'];
$tdl2 = $_POST['tdl2'];
$tdl3 = $_POST['tdl3'];


if (strcmp($tdl1,$tdl2)==0 or strcmp($tdl1,$tdl3)==0){
	header("Location:false.html");
}
else
{	
if ((strpos($rollno, "btccse") !== false or strpos($rollno, "BTCCSE") !== false) and (strpos($tdl1, "ET") !== false or strpos($tdl2, "ET") !== false or strpos($tdl3, "ET") !== false))
    header("Location:ffalse.html");

else if ((strpos($rollno, "bhm") !== false or strpos($rollno, "BHM") !== false) and (strpos($tdl1, "HM") !== false or strpos($tdl2, "HM") !== false or strpos($tdl3, "HM") !== false))
    header("Location:ffalse.html");

else if ((strpos($rollno, "bscmit") !== false or strpos($rollno, "BSCMIT") !== false) and (strpos($tdl1, "HS") !== false or strpos($tdl2, "HS") !== false or strpos($tdl3, "HS") !== false))
    header("Location:ffalse.html");

else if ((strpos($rollno, "mdesid") !== false or strpos($rollno, "MDESID") !== false) and (strpos($tdl1, "DE") !== false or strpos($tdl2, "DE") !== false or strpos($tdl3, "DE") !== false))
    header("Location:ffalse.html");

else if ((strpos($rollno, "barch") !== false or strpos($rollno, "BARCH") !== false) and (strpos($tdl1, "AA") !== false or strpos($tdl2, "AA") !== false or strpos($tdl3, "AA") !== false))
    header("Location:ffalse.html");

else if ((strpos($rollno, "bbahw") !== false or strpos($rollno, "BBAHW") !== false) and (strpos($tdl1, "MS") !== false or strpos($tdl2, "MS") !== false or strpos($tdl3, "MS") !== false))
    header("Location:ffalse.html");

else if ((strpos($rollno, "bplanur") !== false or strpos($rollno, "BPLANUR") !== false) and (strpos($tdl1, "PD") !== false or strpos($tdl2, "PD") !== false or strpos($tdl3, "PD") !== false))
    header("Location:ffalse.html");

else if ((strpos($rollno, "bballb") !== false or  strpos($rollno, "BBALLB") !== false) and (strpos($tdl1, "LA") !== false or strpos($tdl2, "LA") !== false or strpos($tdl3, "LA") !== false))
    header("Location:ffalse.html");

else
{
$result=mysqli_query("select * from $tdl1");
$rows=mysqli_num_rows($result);
if ($rows<=5)
{  $stmt = $conn->prepare("insert into $tdl1(firstname , lastname , gender , rollno , emailid , phoneno) values(?, ?, ?, ?, ?, ?)");
   $stmt->bind_param("sssssi", $firstname, $lastname, $gender, $rollno, $emailid, $phoneno);
   $execval = $stmt->execute();
   echo $execval;
}
else
{  $result1=mysqli_query("select * from $tdl2");
   $rows1=mysqli_num_rows($result1);
   if ($rows1<=30)
   {   $stmt = $conn->prepare("insert into $tdl2(firstname , lastname , gender , rollno , emailid , phoneno) values(?, ?, ?, ?, ?, ?)");
       $stmt->bind_param("sssssi", $firstname, $lastname, $gender, $rollno, $emailid, $phoneno);
       $execval = $stmt->execute();
       echo $execval;
   }
   else 
   {  $result2=mysqli_query("select * from $tdl3");
      $rows2=mysqli_num_rows($result2);
      if ($rows2<=30)
      {   $stmt = $conn->prepare("insert into $tdl2(firstname , lastname , gender , rollno , emailid , phoneno) values(?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("sssssi", $firstname, $lastname, $gender, $rollno, $emailid, $phoneno);
          $execval = $stmt->execute();
          echo $execval;
      }
      else
         header("Location:ffalsee.html");
   }
}
header("Location: true.html");
$stmt->close();
$conn->close();
}}

?>