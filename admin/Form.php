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
              <?php
        if($_SESSION['alert']) {
           echo $_SESSION['message']; 
        }        
        ?>
            
            	<div class="form-group">
                Gebruikersnaam
                <span class="error">* </span>
                <input type="text" class="form-control" placeholder="Vul hier in" name="username"  	value="<?php echo (isset($_POST['username']) ? $_POST['username'] : '') ?>">
                </div><div class="form-group">
                Wachtwoord
                <span class="error">*</span>
                <input type="password" class="form-control" placeholder="Vul hier in" name="password"  	value="<?php echo (isset($_POST['password']) ? $_POST['password'] : '') ?>" >
                </div><div class="form-group">
                Voornaam
                <span class="error">*</span>
                <input type="text" class="form-control" placeholder="Vul hier in" name="f_name"    value="<?php echo (isset($_POST['f_name']) ? $_POST['f_name'] : '') ?>" >
                </div><div class="form-group">
                Tussenvoegsel
                <input type="text" class="form-control" placeholder="Vul hier in" name="insertion"    value="<?php echo (isset($_POST['insertion']) ? $_POST['insertion'] : '') ?>">
                </div><div class="form-group">
                Achternaam
                <span class="error">*</span>
                <input type="text" class="form-control" placeholder="Vul hier in" name="l_name"  		value="<?php echo (isset($_POST['l_name']) ? $_POST['l_name'] : '') ?>">
                </div><div class="form-group">
                Klas
                <input type="text" class="form-control" placeholder="Vul hier in" name="class"  		value="<?php echo (isset($_POST['class']) ? $_POST['class'] : '') ?>">
                </div><div class="form-group">
                School
                <input type="text" class="form-control" placeholder="Vul hier in" name="school"  		value="<?php echo (isset($_POST['school']) ? $_POST['school'] : '') ?>">
                </div><div class="form-group">
                Rol
                <span class="error">*</span>
           
                
    
 				<?php 
				
					
			
                   echo '
                   <select name="rol" required="required" class="form-control">
						<option '. (Input::get('rol') == '' ? 'selected' : '') .' value="">Kies rol</option>
						<option '. (Input::get('rol') == 'Kind' ? 'selected' : '') .' value="Kind">Kind</option>
						<option '. (Input::get('rol') == 'Ouder' ? 'selected' : '') .' value="Ouder">Ouder</option>						
					</select>		
                   ';  
                
				
                     
                 ?>
            
                </div><div class="form-group">
                Email
                <input type="text" class="form-control" placeholder="Vul hier in" name="email"		value="<?php echo (isset($_POST['email']) ? $_POST['email'] : '') ?>">
                </div><div class="form-group">
                Telefoonnummer
                <input type="text" class="form-control" placeholder="Vul hier in" name="tel"		value="<?php echo (isset($_POST['tel']) ? $_POST['tel'] : '') ?>">
                </div><div class="form-group">
                Dyslexie
                <input type="radio" name="dys"     value="ja"> Ja
                <input type="radio" name="dys"     value="nee"> Nee
                </div><div class="form-group">
                Inschrijfdatum
                <span class="error">*</span>
                <input type="date" required class="form-control" placeholder="dd/mm/jjjj" name="join_date" 	value="<?php echo (isset($_POST['join_date']) ? $_POST['join_date'] : '') ?>">
                </div><div class="form-group">
                Extra opmerkingen 
                <textarea rows="5" class="form-control" placeholder="Vul hier in" cols="22" name="comment"><?php echo (isset($_POST['comment']) ? $_POST['comment'] : '') ?></textarea>
                </div><div class="form-group">
                
                
                <input type="submit" class="btn btn-primary" name="save_user" value="Opslaan">
            	</div>
    </form>
  </div>
  <div class="col-md-4"><!--Rechter kant--></div>  
  </div>    


</body>
</html>