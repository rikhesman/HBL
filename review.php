<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include('build/head.php');?>
</head>
<body>
<?php
      if(!isset($_SESSION['use'])){ // If session is not set that redirect to Login Page 
          include('build/navbar.php');  
       } else {
          include('build/navbarlogout.php');
      }
?>

   <div class="row"> 
  <div class="col-md-4"><!--Linker kant--></div>
    <div class="col-md-4">
    <h3>Bekijk hier de reviews "De bijlesjuf"</h3>
    <p>nog geen reviews geschreven</p>
    <div class="col-md-4"><!--Rechter kant--></div> 
    </div>


</body>
</html>


