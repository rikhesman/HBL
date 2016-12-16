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
    include('build/navbar.php');
?>

   <div class="row"> 
  <div class="col-md-4"><!--Linker kant--></div>
    <div class="col-md-4">
 

        <h3>Contact formulier "De bijlesjuf"</h3>
<p><span class="error">* Verplicht veld.</span></p>
        <h3 class="error"><?php echo $message;?></h3>
<form method="post">
    <div class="form-group">Naam:  <span class="error">* <?php echo $nameErr;?></span><input type="text" class="form-control" placeholder="Vul hier in" name="name" value="<?php echo $name,$Ename;?>"></div>
    <div class="form-group">Achternaam:  <span class="error">* <?php echo $lastnameErr;?></span><input type="text" class="form-control" placeholder="Vul hier in" name="lastname" value="<?php echo $lastname,$Elastname;?>"></div>
    <div class="form-group">Email:  <span class="error">* <?php echo $emailErr;?></span><input type="text" class="form-control" placeholder="Vul hier in" name="email" value="<?php echo $email,$Eemail;?>"></div>
    <div class="form-group">Onderwerp:  <span class="error">* <?php echo $subjectErr;?></span><input type="text" class="form-control" placeholder="Vul hier in" name="subject" value="<?php echo $subject,$Esubject;?>"></div>
    <div class="form-group">Bericht:  <span class="error">* <?php echo $commentErr;?></span><textarea rows="5" class="form-control" placeholder="Vul hier in" cols="22" name="comment"><?php print($checkcomment)?></textarea></div>
<div class="g-recaptcha" data-sitekey="6LeUJQ0UAAAAACQBpeqfD9zojgpKWbqV9ToIBRYk"></div>
    <br>
     <div class="form-group"><input type="submit" name="tocontact" value="Verstuur bericht"></div>

     
</form>

    
</div>
    
    <div class="col-md-4"><!--Rechter kant--></div> 
    </div>


</body>
</html>


