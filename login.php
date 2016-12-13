<?php 
include('includes/autoloader.php');
   
?>


<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>De Bijlesjuf</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="./css/bootstrap.css">
	  <link rel="stylesheet" href="./css/bootstrap1.css">
	  <link rel="shortcut icon" href="./foto/logosonnega.ico">
	  <script src="./js/javascript.js"></script>
	  <script src="./js/javascript1.js"></script>
	  <script src="https://www.google.com/recaptcha/api.js"></script>
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
                <div class="form-group">Gebruikersnaam <span class="error">* </span><input type="text" class="form-control" placeholder="Vul hier in" name="username" value=""></div>
                <div class="form-group">Wachtwoord <span class="error">* </span><input type="password" class="form-control" placeholder="Vul hier in" name="password"   value=""></div>
                <div class="form-group">
                	<input type="submit" class="btn btn-primary" name="login" value="Login">               
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


