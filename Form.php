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
    
                
        <form>
            <table>
            <tr>
                <td>Voornaam vader</td>
                <td><input type="text" name="first_name_v"  value=""></td>
            </tr>
            <tr>
                <td>Achternaam vader</td>
                <td><input type="text" name="last_name_v"   value=""></td>
            </tr>
            <tr>
                <td>Voornaam moeder</td>
                <td><input type="text" name="first_name_m"  value=""></td>
            </tr>
            <tr>
                <td>Achternaam moeder</td>
                <td><input type="text" name="last_name_m"   value=""></td>
            </tr>
            <tr>
                <td>Email 1</td>
                <td><input type="text" name="email_1"       value=""></td>
            </tr>
            <tr>
                <td>Email 2</td>
                <td><input type="text" name="email_2"       value=""></td>
            </tr>
            <tr>
                <td>Email kind</td>
                <td><input type="text" name="email_k"       value=""></td>
            <tr>
                <td>Telefoon 1</td>
                <td><input type="number" name="telefoon_1"  value=""></td>
            </tr>
            <tr>
                <td>Telefoon 2</td>
                <td><input type="number" name="telefoon_2"  value=""></td>
            </tr>
            <tr>
                <td>Telefoon 3</td>
                <td><input type="number" name="telefoon_k"  value=""></td>
            <tr>
                <td>Voornaam kind</td>
                <td><input type="text" name="first_name_k"  value=""></td>
            </tr>
            <tr>
                <td>Achternaam kind</td>
                <td><input type="text" name="last_name_k"   value=""></td>
            </tr>
            <tr>
                <td>Geboortedatum</td>
                <td><input type="text" name="birth_date"    value=""></td>
            </tr>
            <tr>
                <td>School</td>
                <td><input type="text" name="school"        value=""></td>
            </tr>
            <tr>
                <td>Vak(ken)</td>
                <td><input type="text" name="vak"           value=""></td>
            </tr>
            <tr>
                <td>Dyslexie</td>
                <td><input type="radio" name="dyslexie"     value="ja"> Ja
                    <input type="radio" name="dyslexie"     value="nee"> Nee</td>
            </tr>
            <tr>
                <td>Extra opmerkingen</td>
                <td><textarea rows="5" cols="22" name="opmerking"></textarea></td>
            </tr>
            </table>    
            <input type="button" name="opslaan" value="Opslaan">
    </form>
    


<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
