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
      if(!isset($_SESSION['admin'])){ // If session is not set that redirect to Login Page
          include('build/navbar.php');
           //header("Location:information.php");  
       } else {
          include('build/navbarlogout.php');
      }
?>



  <div class="row">
    <div class="col-md-4"><!--Linker kant--></div>
    <div class="col-md-4">
  <h3>Wie is “de bijlesjuf“ ?</h3><br>
  

   
       <p>
Mijn naam is Marjan Sonnega. Ik heb ruim 30 jaar gewerkt in het basisonderwijs.<br>
Als groepsleerkracht en de laatste 10 jaar als Remedial Teacher. Tevens ben ik “ dyslexie
specialist”.<br>
Ik help graag kinderen, in een 1 op 1 situatie, met hun problemen / hiaten op het gebied
van o.a. rekenen, spelling en begrijpend lezen.<br>
De kinderen krijgen door de vakkundige hulp vaak meer zelfvertrouwen.</p>
    
     Werkwijze en vakken:

De bijlessen worden gegeven in de R.T. kamer op de 1 e verdieping aan de Harlingerstraatweg 6a te Leeuwarden ( dichtbij het centrum)
Voorafgaand vindt een intakegesprek ( gratis) plaats met ouder(s) en kind.
Vaak vindt er een gesprek plaats met de groepsleerkracht ( indien ouders hier toestemming voor geven)
Het uurtarief is euro 25, 00 ( na 4 lessen factuur)

<ul><br>Vakken:
<li>Spelling ( regels en werkwoord spelling )</li>
<li>Begrijpend Lezen</li>
<li>Woordenschat ontwikkeling</li>
<li>Rekenen</li>
<li>Cito eindtoets oefening</li>
<li>Dyslexie begeleiding</li></ul>
<ul><br>Voor wie ?
<li>basischoolleerlingen</li>
<li>kinderen met dyslexie</li>
     </ul><br>
    <h3>Beschikbaarheid van “De Bijlesjuf“</h3>
    <table class="table">
    <thead>
      <tr>
        <th>Dag</th>
        <th>Tijd</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Maandag</td>
        <td>15.30 - 17.30</td>
      </tr>
        <tr>
  <td>Dinsdag</td>
  <td>15.30 - 17.30</td>
</tr>
        <tr>
  <td>Woensdag</td>
  <td>15.30 - 17.30</td>
</tr>
        <tr>
  <td>Donderdag</td>
  <td>15.30 - 17.30</td>
</tr>
    </tbody>
  </table>
    </div>
      <div class="col-md-4"><!--Rechter kant--></div> 
  </div>
    
     
      
  




</body>
</html>
