<?php

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
                Gebruikersnaam*
                <input type="text" class="form-control" placeholder="Vul hier in" name="username"  	value="">
                </div><div class="form-group">
                Wachtwoord*
                <input type="password" class="form-control" placeholder="Vul hier in" name="password"  	value="">
                </div><div class="form-group">
                Voornaam*
                <input type="text" class="form-control" placeholder="Vul hier in" name="f_name"    value="">
                </div><div class="form-group">
                Tussenvoegsel
                <input type="text" class="form-control" placeholder="Vul hier in" name="insertion"    value="">
                </div><div class="form-group">
                Achternaam*
                <input type="text" class="form-control" placeholder="Vul hier in" name="l_name"  		value="">
                </div><div class="form-group">
                Rol*
                <select required class="form-control" name="rol">
                	<option value="choose">Kies een rol</option>
                	<option value="Kind">Kind</option>
                	<option value="Ouder">Ouder</option>
                </select>
                </div><div class="form-group">
                Email
                <input type="text" class="form-control" placeholder="Vul hier in" name="email"		value="">
                </div><div class="form-group">
                Telefoonnummer
                <input type="text" class="form-control" placeholder="Vul hier in" name="tel"		value="">
                </div><div class="form-group">
                Dyslexie
                <input type="radio" name="dys"     value="ja"> Ja
                <input type="radio" name="dys"     value="nee"> Nee
                </div><div class="form-group">
                Inschrijfdatum*
                <input type="date" class="form-control" placeholder="dd/mm/jjjj" name="join_date" 	value="">
                </div><div class="form-group">
                Extra opmerkingen 
                <textarea rows="5" class="form-control" placeholder="Vul hier in" cols="22" name="comment"></textarea>
                </div><div class="form-group">
                <p>* = Verplicht</p>
                
                <input type="submit" class="btn btn-primary" name="save" value="Opslaan">
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
