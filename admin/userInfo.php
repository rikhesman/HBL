<?php
include('build/header.php'); 
?>


<div class="row">
        <div class="col-md-2"><!--Linker kant--></div>
  <div class="col-md-6">
    <h1>Informatie Gebruikers</h1>
     
<?php	


	    
 foreach(accountManagement::userInfo() as $user)
{
	echo $user['username'];
	echo $user['f_name'];
}
?>

 


  </div>
  
  <div class="col-md-4"><!--Rechter kant--></div>  
  </div>    


</body>
</html>