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
    <h3>Beschikbaarheid van “De Bijlesjuf“</h3>
    <table class="table">
    <thead>
      <tr>
        <th>Dag</th>
        <th>Tijd</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Maandag</td>
        <td>15.30 - 17.30</td>
      </tr>
        <tr>
  <td>Dinsdag</td>
  <td>15.30 - 17.30</td>
</tr>
        <tr>
  <td>Woensdag</td>
  <td>15.30 - 17.30</td>
</tr>
        <tr>
  <td>Donderdag</td>
  <td>15.30 - 17.30</td>
</tr>
    </tbody>
  </table>
    
    
            <form method="POST" action="" enctype="text/plain">
                
                <div class="form-group">Naam:
                    <input type="text" class="form-control" placeholder="Vul hier in" name="naam"   value=""></div>
                <div class="form-group">Achternaam: 
                    <input type="text" class="form-control" placeholder="Vul hier in" name="achternaam"   value=""></div>
                <div class="form-group">E-mailadres: 
                    <input type="text" class="form-control" placeholder="Vul hier in" name="email"   value=""></div>
                <div class="form-group">Onderwerp: 
                    <input type="text" class="form-control" placeholder="Vul hier in" name="onderwerp"   value=""></div>
                <div class="form-group">Bericht: 
                    <textarea rows="5" class="form-control" placeholder="Vul hier in" cols="22" name="bericht"></textarea></div>
                <div class="form-group"><input type="submit" name="verstuur" value="Verstuur bericht">
                <input type="reset" name="annuleren" value="Annuleren"></div>
            </form> 
    
    
</div>
    
    <div class="col-md-4"><!--Rechter kant--></div> 
    </div>


</body>
</html>


