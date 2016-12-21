<?php include('includes/autoloader.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include('build/head.php');?>
</head>
<body>

<?php include('build/navbar.php'); ?>

    <div class="row">
<div class="col-md-3"><!--Linker kant--></div>
<div class="col-md-4" >
  <h3>Bekijk hier de agenda van “De Bijlesjuf“.</h3><br>
  <!-- Responsive iFrame -->
    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;height=900&amp;wkst=2&amp;bgcolor=%233366ff&amp;src=hesmantest%40gmail.com&amp;color=%231B887A&amp;ctz=Europe%2FAmsterdam" style="border-width:0" width="700" height="700"  frameborder="0" scrolling="no"></iframe>

    </div>
     <div class="col-md-3"><!--Rechter kant--></div>  
  </div>



</body>
</html>