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
	  <div class="col-md-2">
	  
	  </div>
   <div class="col-md-8">		
<?php 
       // laad alle downloads zien die de beheerder plaats op de website
       if($_SESSION['user']['role'] == 'Ouder' OR 'Kind'){      
	        	
?>		
	<table class="table">
		<tr>
			<th>Bestandsnaam</th>
			<th>Link</th>
		</tr>
<?php	        

		 foreach (downloadManagement::getDownload() as $down) {
			echo'
			<tr>
				<td>'.$down['name'].'</td>
				<td><a class="btn btn-primary" href="data/'.$down['file'].'">Klik hier</a></td>
			</tr>
				
			
			';
		}
		
		}
		?>
	</table>
    
    </div>
     <div class="col-md-2">
                <!--Rechter kant-->
        </div>
   </div>


</body>
</html>