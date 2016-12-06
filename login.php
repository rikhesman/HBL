<!DOCTYPE html>
<html lang="en">
<head>
   <?php include('build/head.php');
    session_start();?>
</head>
<body>
<div class="row"> 
  <div class="col-md-4"><!--Linker kant--></div>
    <div class="col-md-4">
    	<div class="panel panel-default login">
    	<div class="panel-body">
             <h3>Inloggen op de website van HBL</h3><br>
            <form method="POST" action="" enctype="text/plain">
                
                <div class="form-group">Gebruikersnaam
                    <input type="text" class="form-control" placeholder="Vul hier in" name="naam"   value=""></div>
                <div class="form-group">Wachtwoord
                    <input type="password" class="form-control" placeholder="Vul hier in" name="wachtwoord"   value=""></div>
                <div class="form-group"><input type="submit" class="btn btn-primary" name="verstuur" value="Login">               
                	<input type="submit" name="annuleren" class="btn btn-danger" value="Terug" onclick="window.location='index.php';">
                </div>                
            </form> 
    	</div>
    </div>
</div>
    
    <div class="col-md-4"><!--Rechter kant--></div> 
    </div>


</body>
</html>


