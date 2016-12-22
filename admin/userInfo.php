<?php
include('build/header.php'); 
?>


<div class="row">
        <div class="col-md-1"><!--Linker kant--></div>
  <div class="col-md-6">
    
    <h1>Informatie Gebruikers</h1>
        <?php
	    if($_SESSION['alert']) {
	        echo $_SESSION['message']; 
	    } ?>
    <table class="table">
        <thead>
        <th>Gebruikersnaam</th>
        <th>Voornaam</th>
        <th>Tv.</th>
        <th>Achternaam</th>
        <th>rol</th>
        <th>email</th>
        <th>Tel.</th>
        <th>Inschrijfdatum</th>
        <th>Dyslexie</th>
        <th>Klas</th>
        <th>School</th>
        <th>Comment</th>
        <th>Verwijderen</th>
        </thead>
      <tbody>
<?php	

	    
 foreach(accountManagement::userInfo() as $user)
{
	echo'
    <tr>
    <td>'.$user['username'].'</td>
        <td>'.$user['f_name'].'</td>
         <td>'.$user['insertion'].'</td>
        <td>'.$user['l_name'].'</td>
        <td>'.$user['rol'].'</td>
        <td>'.$user['email'].'</td>
        <td>'.$user['tel'].'</td>
        <td>'.$user['join_date'].'</td>
        <td>'.$user['dys'].'</td>
        <td>'.$user['class'].'</td>
        <td>'.$user['school'].'</td>
        <td>'.$user['comment'].'</td>
        <td>
    		<form method="post">				
				<input type="hidden" name="username" value="'. $user['username'] .'">
				<button type="submit" name="deleteUser" value="Verwijder" class="btn-cms btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
			</form>
			</td>
       </tr> 
        ';
      
}
?>

 
</tbody>
</table>
  </div>
  
  <div class="col-md-4"><!--Rechter kant--></div>  
  </div>    


</body>
</html>