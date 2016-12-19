<?php

include('includes/autoloader.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include('build/head.php');?>
</head>
<body>
<?php include('build/navbar.php'); ?>
    
    
    <?php
    
    //leeg maken van variabelen
    $username = $password = $fname = $lname = $rol = $date = "";
    //aanmaken error variabelen
    $usernameError = $passwordError = $fnameError = $lnameError = $rolError = $dateError = "";
    
    
if(isset($_POST['submit'])) {
	
	//Gebruikersnaam    
    if (empty($_POST["username"])) {
    	$usernameError = "Gebruikersnaam is verplicht";
  	} else {

    	$username = input($_POST["username"]);
  	}
    
	//Wachtwoord
	if (empty($_POST['password'])) {
		$passwordError = "Wachtwoord is verplicht";
	} else {

		$password = input($_POST["password"]);

	}
    
	//Voornaam
    if (empty($_POST['f_name'])) {
		$fnameError = "Voornaam is verplicht";
	} else {
		$fname = input($_POST["f_name"]);
	  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Alleen letters en witregels toegestaan";
       
     
    } else {
        $name = $name;
	}
	}

    //Achternaam
    if (empty($_POST['l_name'])) {
		$lnameError = "Achternaam is verplicht";
	} else {
		$fname = ($_POST["l_name"]);
	  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Alleen letters en witregels toegestaan";
       
     
    } else {
        $name = $name;
	}
	}
    
	//Rol
	if ($_POST['rol'] == "choose") {
		$rolError = "Rol is verplicht";
	} else {
		$rol = ($_POST["rol"]);

	//Achternaam
	if (empty($_POST['rol'])) {
		$rolError = "Rol is verplicht";
	} else {
		$rol = input($_POST["rol"]);
	}

	if (empty($_POST['join_date'])) {
		$dateError = "Datum is verplicht";
	} else {
		$date = input($_POST["join_date"]);
	}




}
}
    ?>

    <div class="row">
        <div class="col-md-4"><!--Linker kant--></div>
  <div class="col-md-4">
    <h1>Inschrijfformulier</h1>
    <!--laat zien dat * betekent verplicht veld -->
    <p><span class="error">* Verplicht</span></p>
         <?php
        if($_SESSION['alert']) {
           echo $_SESSION['message']; 
        }
        ?>
        <form method='post'>
            <div class="form-group">
                Gebruikersnaam
                <span class="error">* <?php echo $usernameError;?></span>
                <input type="text" class="form-control" placeholder="Vul hier in" name="username"  	value="" required="Gebruikersnaam is verplicht">
                </div><div class="form-group">
                Wachtwoord
                <span class="error">* <?php echo $passwordError;?></span>
                <input type="password" class="form-control" placeholder="Vul hier in" name="password"  	value="" required="Wachtwoord is verplicht">
                </div><div class="form-group">
                Voornaam
                <span class="error">* <?php echo $fnameError;?></span>
                <input type="text" class="form-control" placeholder="Vul hier in" name="f_name"    value="" required="Voornaam is verplicht">
                </div><div class="form-group">
                Tussenvoegsel
                <input type="text" class="form-control" placeholder="Vul hier in" name="insertion"    value="">
                </div><div class="form-group">
                Achternaam
                <span class="error">* <?php echo $lnameError;?></span>
                <input type="text" class="form-control" placeholder="Vul hier in" name="l_name"  		value="" required="Achternaam is verplicht">
                </div><div class="form-group">
                Rol
                <span class="error">* <?php echo $rolError;?></span>
                <select required class="form-control" name="rol" required="Rol is verplicht">
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
                Inschrijfdatum
                <span class="error">* <?php echo $dateError;?></span>
                <input type="date" class="form-control" placeholder="dd/mm/jjjj" name="join_date" 	value="" required="Inschrijfdatum is verplicht">
                </div><div class="form-group">
                Extra opmerkingen 
                <textarea rows="5" class="form-control" placeholder="Vul hier in" cols="22" name="comment"></textarea>
                </div><div class="form-group">
                
                
                <input type="submit" class="btn btn-primary" name="save_user" value="Opslaan">
            </div>
    </form>
  </div>
  <div class="col-md-4"><!--Rechter kant--></div>  
  </div>    
	
</body>
</html>