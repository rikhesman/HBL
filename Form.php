<?php
//session_start();

include('includes/autoloader.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include('build/head.php');?>
</head>
<body>
<?php
      if(!isset($_SESSION['admin'])){ // If session is not set that redirect to Login Page 
          include('build/navbar.php');  
       } else {
          include('build/navbarlogout.php');
      }
?>
    
    <div class="row">
        <div class="col-md-4"><!--Linker kant--></div>
  <div class="col-md-4">
    <h1>Inschrijfformulier</h1>
        <form method='post'>
            <div class="form-group">
                Voornaam ouder/begeleider
                <input type="text" class="form-control" placeholder="Vul hier in" name="first_name_v"  value="">
                </div><div class="form-group">
                Achternaam ouder/begeleider
                <input type="text" class="form-control" placeholder="Vul hier in" name="first_name_m"  value="">
                </div><div class="form-group">
                Email
                <input type="text" class="form-control" placeholder="Vul hier in" name="email_1"       value="">
                </div><div class="form-group">
                Telefoon
                <input type="text" class="form-control" placeholder="Vul hier in" name="telefoon_1"  value="">
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
                <input type="submit" class="btn btn-primary" name="opslaan" value="Opslaan">
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
