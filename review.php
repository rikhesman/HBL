<?php
include('includes/autoloader.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include('build/head.php');?>
   <link rel="stylesheet" href="./css/rating.css">
</head>
<body>
<?php include('build/navbar.php'); ?>
<div class="container-fluid">
  <div class="row"> 
	 <?php 
	 if($_SESSION['user']['role'] == 'gast' ){      
	        	echo '<div class="col-md-2 center">'; 
			} else if($_SESSION['user']['role'] == 'Ouder' || $_SESSION['user']['role'] == 'Kind') {
				echo '<div class="col-md-4 center">'; 
			}
	 
	 
	 	
	 	
	 	?>
	  	<form method="post" accept-charset="utf-8">		
	        <?php
            // laad het review voor de ouders als ze ingelogd zijn.
	        if($_SESSION['alert']) {

	           echo $_SESSION['message']; 
	        } 
	        ?>
	       
	        <?php if($_SESSION['user']['role'] == 'Ouder' ){        
	      	 echo ' 
	      	         
	    	<h3>Schrijf hier uw review</h3>	
                <p><span class="error">* Verplicht veld.</span></p>
	    	<!-- Rating -->  	
	    	
	    	<fieldset class="rating form-control">
	    	Rating:	    		    
			    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
			    <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
			    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
			    <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
			    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
			    <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
			    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
			    <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
			    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
			    <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
			<span class="error">*</span></fieldset>
	    	 	
	    	<div class="form-group">    
		    	<p>Review<span class="error">*</span></p>
		    	<textarea name="review" class="form-control" placeholder="Geef ons uw mening" rows="8" cols="40"></textarea>	
		    </div>
		    <div class="form-group">
		    	<input type="submit" class="btn btn-primary" value="Plaats Review" name="save_review">
			</div>
	
	  		';}  ?>
	  	</form>    
	  </div>
   <div class="col-md-8">		
<?php 

       // laad de reviews van de ouders op de review pagina zien als je bezoeker van de website bent
       if($_SESSION['user']['role'] == 'gast' ){      

	        	echo '<h4>U moet ingelogd zijn om een review te schrijven!</h4>';
			}
	        ?>
	        
<?php
		 foreach (reviewMAnagement::getReview() as $review) {
			echo'
			<div class="review_block">
				<h3>Door: '.$review['username'].'</h3>
				
				<fieldset class="rating-show form-control">
				Rating:
					<label class="full '.($review['rating'] >= 5.0 ? 'show' : '') .'"></label>
					<label class="half '.($review['rating'] >= 4.5 ? 'show' : '') .'"></label>
					<label class="full '.($review['rating'] >= 4.0 ? 'show' : '') .'"></label>
					<label class="half '.($review['rating'] >= 3.5 ? 'show' : '') .'"></label>
					<label class="full '.($review['rating'] >= 3.0 ? 'show' : '') .'"></label>
					<label class="half '.($review['rating'] >= 2.5 ? 'show' : '') .'"></label>
					<label class="full '.($review['rating'] >= 2.0 ? 'show' : '') .'"></label>
					<label class="half '.($review['rating'] >= 1.5 ? 'show' : '') .'"></label>
					<label class="full '.($review['rating'] >= 1.0 ? 'show' : '') .'"></label>
					<label class="half '.($review['rating'] >= 0.5 ? 'show' : '') .'"></label>				
				</fieldset>
				<div class="form-group left">
				<label for="review">Review:</label><p>'.$review['review'].'</p>
				</div>
			</div>';
		}
		?>

    
    </div>
   </div>


</body>
</html>