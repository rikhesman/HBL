<?php
include('includes/autoloader.php');
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
       } else {
          include('build/navbarlogout.php');
      }
?>

   <div class="row"> 
  <div class="col-md-4"><!--Linker kant--></div>
    <div class="col-md-4">
 
        <?php
// Alle variables worden hier leeg gemaakt
$message = $nameErr = $lastnameErr = $emailErr = $subjectErr = $commentErr = $captchaErr =  "";
$name = $lastname = $email = $subject = $comment  = $secret = "";

?>

        <h3>Vragen formulier "De bijlesjuf"</h3>
<p><span class="error">* Verplicht veld.</span></p>
        <h3 class="error"><?php echo $message;?></h3>
<form method="post" action="question.php">
    <div class="form-group">Naam:  <span class="error">* <?php echo $nameErr;?></span><input type="text" class="form-control" placeholder="Automatisch uit de database" name="name" value="<?php echo $name;?>"></div>
    <div class="form-group">Achternaam:  <span class="error">* <?php echo $lastnameErr;?></span><input type="text" class="form-control" placeholder="Automatisch uit de database" name="lastname" value="<?php echo $lastname;?>"></div>
    <div class="form-group">Email:  <span class="error">* <?php echo $emailErr;?></span><input type="text" class="form-control" placeholder="Automatisch uit de database" name="email" value="<?php echo $email;?>"></div>
    <div class="form-group">Onderwerp:  <span class="error">* <?php echo $subjectErr;?></span><input type="text" class="form-control" placeholder="Vul hier in" name="subject" value="<?php echo $subject;?>"></div>
    <div class="form-group">Bericht:  <span class="error">* <?php echo $commentErr;?></span><textarea rows="5" class="form-control" placeholder="Vul hier in" cols="22" name="comment"><?php print($comment)?></textarea></div>
    <br>
     <div class="form-group"><input type="submit" name="submit" value="Verstuur bericht"></div>

     
</form>

    
</div>
    
    <div class="col-md-4"><!--Rechter kant--></div> 
    </div>


</body>
</html>


