<?php include('includes/autoloader.php'); ?> 
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
  <h3>Bekijk hier de agenda van “De Bijlesjuf“.</h3><br>
    <div class="responsiveCal">
        <iframe src="https://calendar.google.com/calendar/embed?height=800&amp;wkst=2&amp;bgcolor=%23993300&amp;src=hesmantest%40gmail.com&amp;color=%231B887A&amp;ctz=Europe%2FAmsterdam" style="border-width:0" width="800" height="800" frameborder="0" scrolling="no"></iframe>
    </div>
    </div>
     <div class="col-md-4"><!--Rechter kant--></div>  
  </div>



</body>
</html>