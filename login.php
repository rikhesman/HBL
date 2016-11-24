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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Bijlesjuf</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="information.php">Informatie</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
      </ul>
    </div>
  </div>
    </nav>


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


