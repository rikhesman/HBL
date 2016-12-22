<?php include('includes/autoloader.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('build/head.php'); ?>
    </head>
    <body>
        <?php include('build/navbar.php'); ?>
        <div class="row"> 
            <div class="col-md-4"><!--Linker kant--></div>
            <div class="col-md-4">
                <h3>Contact formulier "De bijlesjuf"</h3>
                <p><span class="error">* Verplicht veld.</span></p>
                <?php // laad de errors in het contactformulier zien
                if($_SESSION['alert']) {
                    echo $_SESSION['message']; 
                } ?>
                <form method="post">
                    <div class="form-group">Naam:  <span class="error">*</span><input type="text" class="form-control" placeholder="Vul hier in" name="name" value="<?php echo (isset($_POST['name']) ? $_POST['name'] : '') ?>"></div>
                    <div class="form-group">Achternaam:  <span class="error">* </span><input type="text" class="form-control" placeholder="Vul hier in" name="lastname" value="<?php echo (isset($_POST['lastname']) ? $_POST['lastname'] : '') ?>"></div>
                    <div class="form-group">Email:  <span class="error">* </span><input type="text" class="form-control" placeholder="Vul hier in" name="email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : '') ?>"></div>
                    <div class="form-group">Onderwerp:  <span class="error">* </span><input type="text" class="form-control" placeholder="Vul hier in" name="subject" value="<?php echo (isset($_POST['subject']) ? $_POST['subject'] : '') ?>"></div>
                    <div class="form-group">Bericht:  <span class="error">*</span><textarea rows="5" class="form-control" placeholder="Vul hier in" cols="22" name="comment"><?php echo (isset($_POST['comment']) ? $_POST['comment'] : '') ?></textarea></div>
                    <p>Anti-Spam: Klik hier.</p>
                    <div class="g-recaptcha" data-sitekey="6LeUJQ0UAAAAACQBpeqfD9zojgpKWbqV9ToIBRYk"></div>
                    <br>
                    <div class="form-group"><input class="btn btn-primary" type="submit" name="tocontact" value="Verstuur bericht"></div>
                </form>
            </div>
            <div class="col-md-4"><!--Rechter kant--></div> 
        </div>
    </body>
</html>