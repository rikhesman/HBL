<?php
session_start();
?>

<?php
//
$loginErr = "";
if(isset($_SESSION['admin'] ))   // Checking whether the session is already there or not if 
                              // true that header redirect it to the home page directly 
 {
    header("Location:home.php"); 
 }

if(isset($_POST['submit']))   // it checks whether the user clicked login button or not 
{
     $admin = $_POST['username'];
     $pass = $_POST['password'];
    
    

      if($admin == "admin" && $pass == "1234")  // username is  set to "admin"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['admin']=$admin;


         echo '<script type="text/javascript"> window.open("home.php","_self");</script>';            //  On Successfull Login redirects to home.php

        }

        else
        {
            $loginErr = "Verkeerde gebruikersnaam of wachtwoord";        
        }
     
   
} 


 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include('build/head.php');?>
</head>
<body>
    
    
<div class="row"> 
  <div class="col-md-4"><!--Linker kant--></div>
    <div class="col-md-4">
    	<div class="panel panel-default login">
    	<div class="panel-body">
             <h3>Inloggen op de website van HBL</h3>
            <p><span class="error">* Verplicht veld.</span></p>
            <form method="POST" action="login.php">
                <div class="form-group">Gebruikersnaam <span class="error">* <?php echo $loginErr;?></span><input type="text" class="form-control" placeholder="Vul hier in" name="username" value=""></div>
                <div class="form-group">Wachtwoord <span class="error">* <?php echo $loginErr;?></span><input type="password" class="form-control" placeholder="Vul hier in" name="password"   value=""></div>
                <div class="form-group"><input type="submit" class="btn btn-primary" name="submit" value="Login">               
                	<input type="reset" name="annuleren" class="btn btn-danger" value="Terug" onclick="window.location='index.php';">
                </div>                
            </form> 
    	</div>
    </div>
</div>
    
    <div class="col-md-4"><!--Rechter kant--></div> 
    </div>


</body>
</html>


