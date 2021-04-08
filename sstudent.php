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

$ss = "select * from td20hm01";
$resultt = mysqli_query($conn , $ss);
if ($resultt==true)
{   echo "<p align='center'><b><font size='4pt'>Student Details Registered in TD20HM01 ....</font></b></p>";
    echo "<p align='center'><b><font size='4pt'><table cellspacing=10 cellpading=10><tr><th>NAME</th>\x0B\x0B\x0B<th>GENDER</th>\x0B\x0B\x0B<th>ROLLNO</th>\x0B\x0B\x0B<th>EMAIL-ID</th>\x0B\x0B\x0B<th>PHONE NO</th></tr></font></b>";
    while($row = $resultt->fetch_assoc())
    {   echo "<tr><td>".$row["firstname"]." ".$row["lastname"]."</td>\t\t\t<td>".$row["gender"]."</td>\t\t\t<td>".$row["rollno"]."</td>\t\t\t<td>".$row["emailid"]."</td>\t\t\t<td>".$row["phoneno"]."</td></tr>";
    }
     echo "</table></p>";
}
echo "<br><br>";
$ss = "select * from td20hs01";
$resultt = mysqli_query($conn , $ss);
if ($resultt==true)
{   echo "<p align='center'><b><font size='4pt'>Student Details Registered in TD20HS01 ....</font></b></p>";
    
    echo "<p align='center'><b><font size='4pt'><table cellspacing=10 cellpading=10><tr><th>NAME</th>\t\t\t<th>GENDER</th>\t\t\t<th>ROLLNO</th>\t\t\t<th>EMAIL-ID</th>\t\t\t<th>PHONE NO</th></tr>";
    while($row = $resultt->fetch_assoc())
    {   echo "<tr><td>".$row["firstname"]." ".$row["lastname"]."</td>\t\t\t<td>".$row["gender"]."</td>\t\t\t<td>".$row["rollno"]."</td>\t\t\t<td>".$row["emailid"]."</td>\t\t\t<td>".$row["phoneno"]."</td></tr>";
    }
    echo "</table></p>";
}
echo "<br><br>";
$ss = "select * from td20la01";
$resultt = mysqli_query($conn , $ss);
if ($resultt==true)
{   echo  "<p align='center'><b><font size='4pt'>Student Details Registered in TD20LA01 ....</font></b></p>";
    
    echo "<p align='center'><b><fontsize='4pt'><table cellspacing=10 cellpading=10 ><tr><th>NAME</th>\t\t\t<th>GENDER</th>\t\t\t<th>ROLLNO</th>\t\t\t<th>EMAIL-ID</th>\t\t\t<th>PHONE NO</th></tr>";
          while($row = $resultt->fetch_assoc())
          {   echo "<tr><td>".$row["firstname"]." ".$row["lastname"]."</td>\t\t\t<td>".$row["gender"]."</td>\t\t\t<td>".$row["rollno"]."</td>\t\t\t<td>".$row["emailid"]."</td>\t\t\t<td>".$row["phoneno"]."</td></tr>";
          }
          echo "</table></p>";
       }
       echo "<br><br>";
       $ss = "select * from td19et01";
       $resultt = mysqli_query($conn , $ss);
       if ($resultt==true)
       {   echo"<p align='center'><b><font size='4pt'> Student Details Registered in TD19ET01 ....</font></b></p>";
           
           echo"<p align='center'><b><fontsize='4pt'> <table cellspacing=10 cellpading=10><tr><th>NAME</th>\t\t\t<th>GENDER</th>\t\t\t<th>ROLLNO</th>\t\t\t<th>EMAIL-ID</th>\t\t\t<th>PHONE NO</th></tr>";
           while($row = $resultt->fetch_assoc())
           {   echo "<tr><td>".$row["firstname"]." ".$row["lastname"]."</td>\t\t\t<td>".$row["gender"]."</td>\t\t\t<td>".$row["rollno"]."</td>\t\t\t<td>".$row["emailid"]."</td>\t\t\t<td>".$row["phoneno"]."</td></tr>";
           }
           echo "</table></p>";
        }
        echo "<br><br>";
        $ss = "select * from td19ms01";
        $resultt = mysqli_query($conn , $ss);
        if ($resultt==true)
        {   echo "<p align='center'><b><font size='4pt'>Student Details Registered in TD19MS01 ....</font></b></p>";
            
            echo "<p align='center'><b><fontsize='4pt'><table cellspacing=10 cellpading=10><tr><th>NAME</th>\t\t\t<th>GENDER</th>\t\t\t<th>ROLLNO</th>\t\t\t<th>EMAIL-ID</th>\t\t\t<th>PHONE NO</th></tr>";
            while($row = $resultt->fetch_assoc())
            {   echo "<tr><td>".$row["firstname"]." ".$row["lastname"]."</td>\x0B\x0b\x0B<td>".$row["gender"]."</td>\x0B\x0b\x0B<td>".$row["rollno"]."</td>\x0B\x0b\x0B<td>".$row["emailid"]."</td>\x0B\x0b\x0B<td>".$row["phoneno"]."</td></tr>";
            }
            echo "</table></p>";
         }
         echo "<br><br>";
         $ss = "select * from td20pd01";
         $resultt = mysqli_query($conn , $ss);
         if ($resultt==true)
         {   echo "<p align='center'><b><font size='4pt'>Student Details Registered in TD20PD01 .....</font></b></p>";
             
             echo"<p align='center'><b><fontsize='4pt'> <table cellspacing=10 cellpading=10><tr><th>NAME</th>\t\t\t<th>GENDER</th>\t\t\t<th>ROLLNO</th>\t\t\t<th>EMAIL-ID</th>\t\t\t<th>PHONE NO</th></tr>";
             while($row = $resultt->fetch_assoc())
             {   echo "<tr><td>".$row["firstname"]." ".$row["lastname"]."</td>\x0B\x0b\x0B<td>".$row["gender"]."</td>\x0B\x0b\x0B<td>".$row["rollno"]."</td>\x0B\x0b\x0B<td>".$row["emailid"]."</td>\x0B\x0b\x0B<td>".$row["phoneno"]."</td></tr>";
             }
             echo "</table></p>";
          }
          echo "<br><br>";
          $ss = "select * from td20aa01";
          $resultt = mysqli_query($conn , $ss);
          if ($resultt==true)
          {   echo "<p align='center'><b><font size='4pt'>Student Details Registered in TD20AA01 ....</font></b></p>";
              
              echo "<p align='center'><font size='4pt'><table cellspacing=10 cellpading=10><tr><th>NAME</th>\x0B\x0b\x0B<th>GENDER</th>\x0B\x0b\x0B<th>ROLLNO</th>\x0B\x0b\x0B<th>EMAIL-ID</th>\x0B\x0b\x0B<th>PHONE NO</th></tr></font>";
              while($row = $resultt->fetch_assoc())
              {   echo "<tr><td>".$row["firstname"]." ".$row["lastname"]."</td>\x0B\x0b\x0B<td>".$row["gender"]."</td>\x0B\x0b\x0B<td>".$row["rollno"]."</td>\x0B\x0b\x0B<td>".$row["emailid"]."</td>\x0B\x0b\x0B<td>".$row["phoneno"]."</td></tr>";
              }
              echo "</table></p>";
           }
           echo "<br><br>";
           $ss = "select * from td20de01";
           $resultt = mysqli_query($conn , $ss);
           if ($resultt==true)
           {   echo  "<p align='center'><b><font size='4pt'>Student Details Registered in TD20DE01 ....</font></b></p>";

               echo "<p align='center'><b><font size='4pt'><table cellspacing=10 cellpading=10><tr><th>NAME</th>\x0B\x0b\x0B<th>GENDER</th>\x0B\x0b\x0B<th>ROLLNO</th><th>EMAIL-ID</th>\x0B\x0b\x0B<th>PHONE NO</th></tr>";
               while($row = $resultt->fetch_assoc())
               {   echo "<tr><td>".$row["firstname"]." ".$row["lastname"]."</td>x0B\x0b\x0B<td>".$row["gender"]."</td>x0B\x0b\x0B<td>".$row["rollno"]."</td>x0B\x0b\x0B<td>".$row["emailid"]."</td>x0B\x0b\x0B<td>".$row["phoneno"]."</td></tr>";
               }
               echo "</table></p";
            }
$conn->close();
?>
</body>
</html>