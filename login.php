<?php 
include('includes/autoloader.php');
   
?>


<!DOCTYPE html>
	<html lang="en">
	<head>
	<?php include ('build/head.php'); ?>
	  </head>
	<body>   
    
<div class="row"> 
  <div class="col-md-4"><!--Linker kant--></div>
    <div class="col-md-4">
    	<div class="panel panel-default login">
    	<div class="panel-body">
             <h3>Inloggen op "De Bijlesjuf"</h3>
            <p><span class="error">* Verplicht veld.</span></p>
             <?php // laad de errors in het inlogscherm
        if($_SESSION['alert']) {
           echo $_SESSION['message']; 
        }
            ?>
            <form method="POST">
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


