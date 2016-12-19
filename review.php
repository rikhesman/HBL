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
    	<input type="submit" value="Plaats Review" name="save_review">
	
</form>
  ';}
        ?>
        
<?php
		 foreach (reviewMAnagement::getReview() as $review) {
			echo'
			<div class="review_block">
				<h2>Gebruiker: '.$review['username'].'</h2>
				<p>Rating: '.$review['rating'].'/5</p>
				<p>Review:<br>'.$review['review'].'</p>
			</div>';
		}
		?>

    <div class="col-md-4"><!--Rechter kant--></div> 
    </div>


</body>
</html>