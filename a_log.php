<html>
<head>
<title>Admin Login </title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
button
{  background-color: #ddd;
   border: none;
   color: black;
   padding: 10px 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   margin: 4px 2px;
   border-radius: 16px;
}
button:hover
{  background-color: #f1f1f1;
}
</style>
</head>
<body>
<br><br>
<div class="container">
<div class="login-box">
   <div class="row">
         <div class="col-md-6">
             <h2><u><b><i>Administrator Login</i></b></u></h2>
             <form action="validation_a.php" method="post">
             <div class="form-group">
                <label style="font-size=40px;">Username<sup style="color:red; font-size:16px;">*</sup></label>
                <input type="text" name="user" class="form-control" style="color:black;" required>
                </div>
             <div class="form-group">
                <label style="font-size=40px;">Password<sup style="color:red; font-size:16px;">*</sup></label>
                <input type="password" name="password" class="form-control" style="color:black;" required>
                </div>
	    <br><br>
	     <div class="kk">
            <button type="submit" class="btn btn-primary">Login</button>
            </div></form>
         </div>
      </div>
</div>
</div>
</body>
</html>