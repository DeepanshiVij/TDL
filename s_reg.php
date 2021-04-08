<html>
<head>
<title>TDL Registration </title>
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<style>
button
{  
   border: none;
  
   padding: 10px 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   margin: 4px 2px;
   border-radius: 16px;
}
button:hover
{  background-color: blue;
}

</style>


</head>
<body>
<br><br><br>
<div class="container">
<div class="login-box">
   <div class="row">
         <div class="col-md-6">
             <h2><u><b><i>TDL Registration</i></b></u></h2>
             <form action="register.php" method="post">
             <div class="form-group">
                <label style="font-size=40px;">First Name<sup style="color:red; font-size:16px;">*</sup></label>
                <input type="text" name="firstname" class="form-control" style="color:black;" required>
                </div>
             <div class="form-group">
                <label style="font-size=40px;">Last Name<sup style="color:red; font-size:16px;">*</sup></label>
                <input type="text" name="lastname" class="form-control" required>
                </div>
            <div class="form-group">
                
                <label for="gender" style="font-size=40px;">Gender<sup style="color:red; font-size:16px;">*</sup></label>
                <div>
                  <label for="male" class="radio-inline">
                  <input type="radio" name="gender" value="m" id="male"/>Male</label> <br>
                  <label for="female" class="radio-inline">
                  <input type="radio" name="gender" value="f" id="female"/>Female</label><br>
                  <label for="others" class="radio-inline">
                  <input type="radio" name="gender" value="o" id="others"/>Others</label>
                </div>
              </div>
            
            <div class="form-group">
                <label style="font-size=40px;">Roll Number<sup style="color:red; font-size:16px;">*</sup></label>
                <input type="text" name="rollno" class="form-control" required  pattern="((180|190)(btccse|BTCCSE|bhm|BHM|bscmit|BSCMIT|mdesid|MDESID|bbahw|BBAHW|bplanur|BPLANUR|barch|BARCH|bballb|BBALLB))+[0-9]{3}">
                </div>
            <div class="form-group">
                <label style="font-size=40px;">Email ID<sup style="color:red; font-size:16px;">*</sup></label>
                <input type="text" name="emailid" class="form-control" required pattern="[a-z0-9._%+-]+@ansaluniversity.edu.in">
                </div>
            <div class="form-group">
                <label style="font-size=40px;">Phone Number<sup style="color:red; font-size:16px;">*</sup></label>
                <input type="text" name="phoneno" class="form-control" required  pattern="\d*">
                </div><br><br>
<div class="form-group">
             <fieldset>
  <legend style="font-size=40px;">Choose your primary choice<sup style="color:red; font-size:16px;">*</sup></legend>
    <div>
      <input type="checkbox" id="TD20HM01" name="tdl1" value="TD20HM01">
      <label for="TD20HM01">TD20HM01:Dynamics of Hospitality</label>
    </div>
    <div>
      <input type="checkbox" id="TD20HS01" name="tdl1" value="TD20HS01">
      <label for="TD20HS01">TD20HS01:Organisational Psychology</label>
    </div>
    <div>
      <input type="checkbox" id="TD20LA01" name="tdl1" value="TD20LA01">
      <label for="TD20LA01">TD20LA01:Village Development Plan</label>
    </div>
    <div>
      <input type="checkbox" id="TD19ET01" name="tdl1" value="TD19ET01">
      <label for="TD19ET01">TD19ET01:Engineering Drawing</label>
    </div>
    <div>
      <input type="checkbox" id="TD19MS01" name="tdl1" value="TD19MS01">
      <label for="TD19MS01">TD19MS01:Strategies for sustainability</label>
    </div>
    <div>
      <input type="checkbox" id="TD20PD01" name="tdl1" value="TD20PD01">
      <label for="TTD20PD01">TD20PD01:Water Senstivity Urban Settlements</label>
    </div>
    <div>
      <input type="checkbox" id="TD20AA01" name="tdl1" value="TD20AA01">
      <label for="TD20AA01">TD20AA01:Our Built Heritage</label>
    </div>
    <div>
      <input type="checkbox" id="TD20DE01" name="tdl1" value="TD20DE01">
      <label for="TD20DE01">TD20DE01:Branding Personal Narratives</label>
      
    </div>
    
  </fieldset></div><br><br>
<div class="form-group">
<fieldset>
  <legend style="font-size=40px;">Choose your secondary choice<sup style="color:red; font-size:16px;">*</sup></legend>
    <div>
      <input type="checkbox" id="TD20HM01" name="tdl2" value="TD20HM01">
      <label for="TD20HM01">TD20HM01:Dynamics of Hospitality</label>
    </div>
    <div>
      <input type="checkbox" id="TD20HS01" name="tdl2" value="TD20HS01">
      <label for="TD20HS01">TD20HS01:Organisational Psychology</label>
    </div>
    <div>
      <input type="checkbox" id="TD20LA01" name="tdl2" value="TD20LA01">
      <label for="TD20LA01">TD20LA01:Village Development Plan</label>
    </div>
    <div>
      <input type="checkbox" id="TD19ET01" name="tdl2" value="TD19ET01">
      <label for="TD19ET01">TD19ET01:Engineering Drawing</label>
    </div>
    <div>
      <input type="checkbox" id="TD19MS01" name="tdl2" value="TD19MS01">
      <label for="TD19MS01">TD19MS01:Strategies for sustainability</label>
    </div>
    <div>
      <input type="checkbox" id="TD20PD01" name="tdl2" value="TD20PD01">
      <label for="TTD20PD01">TD20PD01:Water Senstivity Urban Settlements</label>
    </div>
    <div>
      <input type="checkbox" id="TD20AA01" name="tdl2" value="TD20AA01">
      <label for="TD20AA01">TD20AA01:Our Built Heritage</label>
    </div>
    <div>
      <input type="checkbox" id="TD20DE01" name="tdl2" value="TD20DE01">
      <label for="TD20DE01">TD20DE01:Branding Personal Narratives</label>
      
    </div>
    
  </fieldset></div><br><br>
<div class="form-group">
<fieldset>
  <legend style="font-size=40px;">Choose your last choice<sup style="color:red; font-size:16px;">*</sup></legend>
    <div>
      <input type="checkbox" id="TD20HM01" name="tdl3" value="TD20HM01">
      <label for="TD20HM01">TD20HM01:Dynamics of Hospitality</label>
    </div>
    <div>
      <input type="checkbox" id="TD20HS01" name="tdl3" value="TD20HS01">
      <label for="TD20HS01">TD20HS01:Organisational Psychology</label>
    </div>
    <div>
      <input type="checkbox" id="TD20LA01" name="tdl3" value="TD20LA01">
      <label for="TD20LA01">TD20LA01:Village Development Plan</label>
    </div>
    <div>
      <input type="checkbox" id="TD19ET01" name="tdl3" value="TD19ET01">
      <label for="TD19ET01">TD19ET01:Engineering Drawing</label>
    </div>
    <div>
      <input type="checkbox" id="TD19MS01" name="tdl3" value="TD19MS01">
      <label for="TD19MS01">TD19MS01:Strategies for sustainability</label>
    </div>
    <div>
      <input type="checkbox" id="TD20PD01" name="tdl3" value="TD20PD01">
      <label for="TTD20PD01">TD20PD01:Water Senstivity Urban Settlements</label>
    </div>
    <div>
      <input type="checkbox" id="TD20AA01" name="tdl3" value="TD20AA01">
      <label for="TD20AA01">TD20AA01:Our Built Heritage</label>
    </div>
    <div>
      <input type="checkbox" id="TD20DE01" name="tdl3" value="TD20DE01">
      <label for="TD20DE01">TD20DE01:Branding Personal Narratives</label>
      
    </div>
    
  </fieldset>
</div>
             <br><br>
	     <div class="kk">
            <button type="submit" class="btn btn-primary">Register</button>
            </div></form>
         </div>
      </div>
</div>
</div>
</body>

</html>