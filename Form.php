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

<?php include('build/navbar.php'); ?>
    
    <div class="row">
        <div class="col-md-4"><!--Linker kant--></div>
  <div class="col-md-4">
    <h1>Inschrijfformulier</h1>
        <form>
            <div class="form-group">
                <label for="title">Voornaam ouder 1</label>
                <input type="text" class="form-control" placeholder="Vul hier in" name="first_name_v"  value="">
                </div><div class="form-group">
                Achternaam ouder 1
                <input type="text" class="form-control" placeholder="Vul hier in" name="last_name_v"   value="">
                </div><div class="form-group">
                Voornaam ouder 2
                <input type="text" class="form-control" placeholder="Vul hier in" name="first_name_m"  value="">
                </div><div class="form-group">
                Achternaam ouder 2
                <input type="text" class="form-control" placeholder="Vul hier in" name="last_name_m"   value="">
                </div><div class="form-group">
                Email 1
                <input type="text" class="form-control" placeholder="Vul hier in" name="email_1"       value="">
                </div><div class="form-group">
                Email 2
                <input type="text" class="form-control" placeholder="Vul hier in" name="email_2"       value="">
                </div><div class="form-group">
                Email kind
                <input type="text" class="form-control" placeholder="Vul hier in" name="email_k"       value="">
                </div><div class="form-group">
                Telefoon 1
                <input type="text" class="form-control" placeholder="Vul hier in" name="telefoon_1"  value="">
                </div><div class="form-group">
                Telefoon 2
                <input type="text" class="form-control" placeholder="Vul hier in" name="telefoon_2"  value="">
                </div><div class="form-group">
                Telefoon 3
                <input type="text" class="form-control" placeholder="Vul hier in" name="telefoon_k"  value="">
                </div><div class="form-group">
                Voornaam kind
                <input type="text" class="form-control" placeholder="Vul hier in" name="first_name_k"  value="">
                </div><div class="form-group">
                Achternaam kind
                <input type="text" class="form-control" placeholder="Vul hier in" name="last_name_k"   value="">
                </div><div class="form-group">
                Geboortedatum
                <input type="text" class="form-control" placeholder="Vul hier in" name="birth_date"    value="">
                </div><div class="form-group">
                School
                <input type="text" class="form-control" placeholder="Vul hier in" name="school"        value="">
                </div><div class="form-group">
                Vak(ken)
                <input type="text" class="form-control" placeholder="Vul hier in" name="vak"           value="">
                </div><div class="form-group">
                Dyslexie
                <input type="radio" name="dyslexie"     value="ja"> Ja
                <input type="radio" name="dyslexie"     value="nee"> Nee
                </div><div class="form-group">
                Extra opmerkingen
                <textarea rows="5" class="form-control" placeholder="Vul hier in" cols="22" name="opmerking"></textarea>
                </div><div class="form-group">
                <input type="button" class="btn btn-primary" name="opslaan" value="Opslaan">
            </div>
    </form>
  </div>
  <div class="col-md-4"><!--Rechter kant--></div>  
  </div>    


<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
