<?php
include('build/header.php'); 
?>


<div class="row">
        <div class="col-md-2"><!--Linker kant--></div>
  <div class="col-md-6">
    <h1>Afbeeldingen uploaden</h1>
     <?php
	    if($_SESSION['alert']) {
	        echo $_SESSION['message']; 
	    } ?>
    <form method="post" enctype="multipart/form-data">
    	<div class="form-group">
	    	<label>Afbeelding naam:</label>
	    	<input class="form-control" type="text" name="alt">
    	</div>
    	<div class="form-group">
	    	<label>Selecteer bestand:</label>
	    	<input type="file" name="file" id="image">
    	</div>
    	<div class="divider"></div>
    	<div class="form-group">
	     	<input class="btn btn-primary" type="submit" name="submit_image" value="upload">
    	</div>
    </form>
  </div>
  <div class="col-md-4"><!--Rechter kant--></div>  
  </div>    


</body>
</html>