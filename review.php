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

   <div class="row"> 
  <div class="col-md-4"><!--Linker kant--></div>
    <div class="col-md-4">
        
        
<form method="post" accept-charset="utf-8">
        <?php if($_SESSION['user']['role'] == 'Ouder' ){        
      	 echo '         
    	<h3>Schrijf hier uw review</h3>	
    	<!-- Rating -->
    <p>
    	<label for="rating">Rating</label>
    	<input type="radio" name="rating" value="1" /> 1 
      	<input type="radio" name="rating" value="2" /> 2
      	<input type="radio" name="rating" value="3" /> 3 
      	<input type="radio" name="rating" value="4" /> 4 
      	<input type="radio" name="rating" value="5" /> 5
    </p>
    
    
    	<label for="review">Review</label>
    	<textarea name="review" placeholder="Geef ons uw mening" rows="8" cols="40"></textarea>	
    
    <p>
    	<input type="submit" value="Plaats Review" name="save_review">
	
</form>
            ';}
        ?>
    <div class="col-md-4"><!--Rechter kant--></div> 
    </div>


</body>
</html>


