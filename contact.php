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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2389.7522161619227!2d5.783542315143672!3d53.20435989303905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c8fc2ba7af802d%3A0xf8902cd9721864dd!2sHarlingerstraatweg+6A%2C+8916+BB+Leeuwarden!5e0!3m2!1snl!2snl!4v1482410736136" width="420" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
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