<!DOCTYPE html>
<html lang="en">
<head>
  <titleDe Bijlesjuf</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/bootstrap1.css">
     <link rel="shortcut icon" href="./foto/logosonnega.ico">
  <script src="./js/javascript.js"></script>
  <script src="./js/javascript1.js"></script>

</head>
<body>

<?php include('build/navbar.php'); ?>


<div class="row"> 
  <div class="col-md-4"><!--Linker kant--></div>
    <div class="col-md-4">
             <h3>Inloggen op de website van “De Bijlesjuf“.</h3><br>
            <form method="POST" action="" enctype="text/plain">
                
                <div class="form-group">Gebruikersnaam
                    <input type="text" class="form-control" placeholder="Vul hier in" name="naam"   value=""></div>
                <div class="form-group">Wachtwoord
                    <input type="password" class="form-control" placeholder="Vul hier in" name="wachtwoord"   value=""></div>
                <div class="form-group"><input type="submit" name="verstuur" value="Login">
                <input type="reset" name="annuleren" value="Annuleren"></div>
            </form> 
    
    
</div>
    
    <div class="col-md-4"><!--Rechter kant--></div> 
    </div>


</body>
</html>


