<html>
<head>
<title>Faculty Register </title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
button:hover
{  
   border: none;
   
   padding: 10px 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   margin: 4px 2px;
   border-radius: 16px;

}
</style>
</head>
<body>
<br><br>
<div class="container">
<div class="login-box">
   <div class="row">
         <div class="col-md-6">
             <h2><u><b><i>Register Here</i></b></u></h2>
             <form action="registration.php" method="post">
             <div class="form-group">
                <label style="font-size=40px;">Faculty Name<sup style="color:red; font-size:16px;">*</sup></label>
                <input type="text" name="faculty" class="form-control" style="color:black;" required>
                </div>
             <div class="form-group">
                <label style="font-size=40px;">ID<sup style="color:red; font-size:16px;">*</sup></label>
                <input type="text" name="id" class="form-control" style="color:black;" required>
                </div>
            <div class="form-group">
                <label style="font-size=40px;">Course Code<sup style="color:red; font-size:16px;">*</sup></label>
                <input type="text" name="ccode" class="form-control" style="color:black;" required>
                </div>
	    <br><br>
	     <div class="kk">
            <button type="submit" class="btn btn-primary">Sign Up</button>
            </div></form>
         </div>
      </div>
</div>
</div>
</body>
</html>