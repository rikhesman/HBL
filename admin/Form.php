<?php

include('build/header.php'); 
?>

    <div class="row">
        <div class="col-md-2"><!--Linker kant--></div>
  <div class="col-md-6">
    <h1>Inschrijfformulier</h1>
    <!--laat zien dat * betekent verplicht veld -->
    <p><span class="error">* Verplicht</span></p>
        <form method='post'>
            <div class="form-group">
                Gebruikersnaam
                <span class="error">* </span>
                <input type="text" class="form-control" placeholder="Vul hier in" name="username"  	value="" required="Gebruikersnaam is verplicht">
                </div><div class="form-group">
                Wachtwoord
                <span class="error">*</span>
                <input type="password" class="form-control" placeholder="Vul hier in" name="password"  	value="" required="Wachtwoord is verplicht">
                </div><div class="form-group">
                Voornaam
                <span class="error">*</span>
                <input type="text" class="form-control" placeholder="Vul hier in" name="f_name"    value="" required="Voornaam is verplicht">
                </div><div class="form-group">
                Tussenvoegsel
                <input type="text" class="form-control" placeholder="Vul hier in" name="insertion"    value="">
                </div><div class="form-group">
                Achternaam
                <span class="error">*</span>
                <input type="text" class="form-control" placeholder="Vul hier in" name="l_name"  		value="" required="Achternaam is verplicht">
                </div><div class="form-group">
                Rol
                <span class="error">*</span>
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
                <span class="error">*</span>
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