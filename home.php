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
      
      if(!isset($_SESSION['admin'])){
          header("Location:login.php");  }  else {
          include('build/navbarlogout.php');
      }
   /*if(!isset($_SESSION['parent'])){
          header("Location:login.php");  }  else {
          include('build/navbarlogout.php');
      }*/
    
   
   
         
?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="./foto/kamer12.jpg" alt="Image">
        
      </div>

      <div class="item">
        <img src="./foto/kamer5.jpg" alt="Image">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
    <div class="row">
<div class="col-md-4"><!--Linker kant--></div>
<div class="col-md-4">
  <h3>Welkom op de website van “De Bijlesjuf“.</h3><br>
  

   
      
       <p>Ik verzorg bijlessen in: Rekenen, Spelling en Begrijpen Lezen aan basisschoolleerlingen.<br>
Dyslectische kinderen kan ik begeleiden bij hun lees- en /of spellingproblemen. En
leerlingen in groep 8 voorbereiden op hun Cito eindtoets.<br>
Door allerlei omstandigheden kunnen leerlingen achterstanden / hiaten in het
onderwijs oplopen.<br>
Individuele hulp kan uitkomst bieden.<br> In een rustige omgeving kan deze “ 1 op 1”
instructie, hulp juist dat zetje geven dat uw kind nodig heeft om weer aan te sluiten bij
de groep.</p>
      
        <h3>Waarom bijles:</h3>

<p>Sommige kinderen missen de instructie in de groep door bijv. De groepsgrootte, te
snelle tempo, afwezigheid / afdwalen of begrijpen het niet.<br> Wanneer er dan niets aan
gedaan wordt, kunnen deze hiaten alleen maar groter worden.<br> Op school ontbreekt het
vaak aan tijd en / of middelen om dit te verhelpen.<br>
Door tijdelijk hulp van buitenaf te geven , in een 1 op 1 situatie, komt de instructie beter
    aan.</p>
    </div>
     <div class="col-md-4"><!--Rechter kant--></div>  
  </div>



</body>
</html>


