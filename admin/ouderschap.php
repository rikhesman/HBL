<?php include ('build/header.php'); ?>
        <div class="row">
            <div class="col-md-2">
                <!--Linker kant-->
            </div>
            <div class="col-md-6">
                <h1>Ouderschap koppelen</h1>
                <form method="post" accept-charset="utf-8">
                    <?php
                    if($_SESSION['alert']) {
                       echo $_SESSION['message']; 
                    }
                    ?>
                    <div class="form-group">
                        Kind
                        <select required class="form-control" name="child">
                            <option value="" disabled Selected>Kies een kind</option>
                            <?php
                            foreach (accountManagement::getChild() as $child) {
                                echo'
                                <option value="'.$child['username'].'">'.$child['username'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        Ouder
                        <select required class="form-control" name="parent">
                            <option value="" disabled Selected>Kies een ouder</option>
                            <?php
                            foreach (accountManagement::getParents() as $parent) {
                                echo'
                                <option value="'.$parent['username'].'">'.$parent['username'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" name="save_parentship" value="Koppelen">
                </form>
                
                
                
          <table class="table">
        <thead>
        <th>Gebruikersnaam Kind</th>
        <th>Gebruikersnaam Ouder</th>
        <th>Verwijderen</th>
        </thead>
      <tbody>
<?php	

	    
 foreach(accountManagement::kindInfo() as $user)
{
	echo'
    <tr>
    <td>'.$user['user_child'].'</td>
    <td>'.$user['user_parent'].'</td>  

        <td>
    		<form method="post">				
				<input type="hidden" name="child" value="'. $user['user_child'] .'">
                <input type="hidden" name="parent" value="'. $user['user_parent'] .'">
				<button type="submit" name="deleteParent" value="Verwijder" class="btn-cms btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
			</form>
			</td>
       </tr> 
        ';
      
}
?>

 
</tbody>
</table>        
                
                
            </div>
        </div>				
    </body>
</html>