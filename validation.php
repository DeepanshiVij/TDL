<html>
<head>
<style>
body {
  background-color: rgb(180,180,180);
  color: white;
  text-shadow: 2px 2px 4px #000000;
}
</style>
</head>
<body>
<?php

session_start();

$conn = new mysqli('localhost','root','','userregistration');

$faculty = $_POST['faculty'];
$id = $_POST['id'];
$ccode = $_POST['ccode'];

$result = mysqli_query($conn, "select * from facultytable where id IN ('$id')");

if ($result==true)
{   $ss = "select * from $ccode";
    $resultt = mysqli_query($conn , $ss);
    if ($resultt==true)
    {   echo "<p align='center'><b><font size='6pt'>Student Details....</font></b></p>";
        echo "<p align='center'><b><font size='4pt'><table cellspacing=10 cellpading=10><tr><th>NAME</th>\t\t\t<th>GENDER</th>\t\t\t<th>ROLLNO</th>\t\t\t<th>EMAIL-ID</th>\t\t\t<th>PHONE NO</th></tr>";
        while($row = $resultt->fetch_assoc())
        {   echo "<tr><td>".$row["firstname"]." ".$row["lastname"]."</td>\t\t\t<td>".$row["gender"]."</td>\t\t\t<td>".$row["rollno"]."</td>\t\t\t<td>".$row["emailid"]."</td>\t\t\t<td>".$row["phoneno"]."</td></tr>";
        }
        echo "</table></p>";
    }
    else
    {   header("Location:false.php");
    }
}
$conn->close();
?>

</body>
</html>