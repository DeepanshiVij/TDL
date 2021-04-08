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

$ss = "select * from facultytable";
$resultt = mysqli_query($conn , $ss);
if ($resultt==true)
{   echo "<p align='center'><b><font size='6pt'>Faculty Details ....</font></b></p>";
    echo "<br>";
    echo "<p align='center'><b><font size='4pt'><table cellspacing=10 cellpading=10><b><tr><th>NAME</th>\x0B\x0B\x0B<th>ID</th>\x0B\x0B\x0B<th>TDL COURSE</th></tr></b></font>";
    while($row = $resultt->fetch_assoc())
    {   echo "<tr><td>".$row["faculty"]."\x0B\x0B\x0B</td><td>".$row["id"]."\x0B\x0B\x0B</td><td>".$row["ccode"]."</td></tr>";
    }
     echo "</table>";
}
else 
{ echo "Unable to connect";
}
$conn->close();
?>
</body>
</html>