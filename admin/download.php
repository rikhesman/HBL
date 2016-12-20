<?php
include('build/header.php'); 
?>


<div class="row">
        <div class="col-md-2"><!--Linker kant--></div>
  <div class="col-md-8">
    <h1>Bestand uploaden</h1>
     <?php
	    if($_SESSION['alert']) {
	        echo $_SESSION['message']; 
	    } ?>
    <form method="post" enctype="multipart/form-data">   
    	<div class="form-group">
	    	<label>Bestandsnaam:</label>
	    	<input class="form-control" type="text" name="name">
    	</div> 	
    	<div class="form-group">
	    	<label>Selecteer bestand:</label>
	    	<input type="file" name="file" id="file">
    	</div>    	
    	<div class="divider"></div>
    	<div class="form-group">
	     	<input class="btn btn-primary" type="submit" name="submit_download" value="upload">
    	</div>
    </form>
    
    <table class="table">
    	<tr>
    		<th>Naam bestand</th>
    		<th>volledige naam</th>
    		<th>Verwijderen</th>
    	</tr>
    <?php 
    foreach(downloadManagement::getDownload() as $file) {
    	echo '
    	<tr>
    		<td>'.$file['name'].'</td>
    		<td>'.$file['file'].'</td>
    		<td>
    		<form method="post" enctype="multipart/form-data">				
				<input type="hidden" name="file" value="'. $file['file'] .'">
				<button type="submit" name="delete_download" value="Verwijder" class="btn-cms btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
			</form>
			</td>
    	</tr>
    	';
    }
    ?>
    </table>
  </div>
  <div class="col-md-4"><!--Rechter kant--></div>  
  </div>    


</body>
</html>