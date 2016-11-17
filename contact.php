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
        <li class="#"><a href="index.php">Home</a></li>
        <li><a href="information.php">Informatie</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
      </ul>
    </div>
  </div>
    </nav>

  
<div class="container text-center">
            
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
    
    
        <?php
        if (isset($_POST["verstuur"])) {
            if ($_POST["email"] == "" || $_POST["onderwerp"] == "" || $_POST["naam"] == "" || $_POST["achternaam"] == "") {
                //print("<h2>Zorg dat de verplichte velden ingevuld zijn!!</h2>");
                ?><form method="POST" action="contact.php">
                   Naam:<input type="text" name="naam" value="<?php print($_POST["naam"]) ?>">
                    <?php
                    if ($_POST["email"] == "") {
                        print("Verplicht!");
                    }
                    ?>
                    <br>
                    Achternaam:<input type="text" name="achternaam" value="<?php print($_POST["achternaam"]) ?>">
                    <?php
                    if ($_POST["email"] == "") {
                        print("Verplicht!");
                    }
                    ?>
                    <br>
                    E-mailadres: <input type="text" name="email" value="<?php print($_POST["email"]) ?>">
                    <?php
                    if ($_POST["email"] == "") {
                        print("Verplicht!");
                    }
                    ?>
                    <br>
                    Onderwerp: <input type="text" name="onderwerp" value="<?php print($_POST["onderwerp"]) ?>">
                    <?php
                    if ($_POST["onderwerp"] == "") {
                        print("Verplicht!");
                    }
                    ?>
                    <br>
                    Bericht: <textarea name="bericht" rows="4" ><?php print($_POST["bericht"]) ?></textarea>
                    <?php
                    if ($_POST["bericht"] == "") {
                        print("Verplicht!");
                    }
                    ?>
                    <br>
                    <input type="submit" name="verstuur" value="Verstuur berichtje!">
                </form><?php
            } else {
                print("Bericht wordt verzonden!!!");
            }
        } else  {
            ?> 
            <form method="POST" action="" enctype="text/plain">
                Naam: <input type="text" name="naam"><br>
                Achternaam: <input type="text" name="naam"><br>
                E-mailadres: <input type="text" name="email"><br>
                Onderwerp: <input type="text" name="onderwerp"><br>
                Bericht: <textarea name="bericht" rows="4"></textarea><br>
                <br>
                <input type="submit" name="verstuur" value="Verstuur bericht">
                <input type="reset" name="annuleren" value="Annuleren">
            </form> 
            <?php
        } 
        ?>
    
    
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>


