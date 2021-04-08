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

$ccode = $_POST['ccode'];

$result = mysqli_query($conn, "select * from facultytable where ccode IN ('$ccode')");
$row1 = $result->fetch_assoc();
if ($row1==true)
{   
    
    echo "<p align='center'><b><font size='4pt'>Faculty : ".$row1["faculty"]."<br></font></b></p>";
    echo "<p align='center'><b><font size='4pt'>Id : ".$row1["id"]."<br></font></b></p>";
}
else 
{   echo "<p align='center'><b><font size='4pt'>No teacher<br></font></b></p>";
}
    $ss = "select * from $ccode";
    $resultt = mysqli_query($conn , $ss);
    if ($resultt==true)
    {   echo "<p align='center'><b><font size='4pt'>Student Details....</font></b></p>";
        echo "<p align='center'><b><font size='4pt'><table cellspacing=10 cellpading=10><tr><th>NAME</th>\t\t\t<th>GENDER</th>\t\t\t<th>ROLLNO</th>\t\t\t<th>EMAIL-ID</th>\t\t\t<th>PHONE NO</th></tr>";
        while($row = $resultt->fetch_assoc())
        {   echo "<tr><td>".$row["firstname"]." ".$row["lastname"]."</td>\t\t\t<td>".$row["gender"]."</td>\t\t\t<td>".$row["rollno"]."</td>\t\t\t<td>".$row["emailid"]."</td>\t\t\t<td>".$row["phoneno"]."</td></tr>";
        }
        echo "</table></p>";
    }
    else
    {   echo "<p align='center'><b><font size='4pt'>No student</font></b></p>";
    }

$conn->close();
?>
</body>
</html>