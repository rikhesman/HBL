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
                <h3>Vragen formulier "De Bijlesjuf"</h3>
                <p><span class="error">* Verplicht veld.</span></p>
                <?php // laad de errors in het vragen formulier
                if($_SESSION['alert']) {
                    echo $_SESSION['message']; 
                } ?>
                <form method="post" action="question.php">
                    <div class="form-group">Onderwerp:  <span class="error">*</span><input type="text" class="form-control" placeholder="Vul hier in" name="subject" value="<?php echo (isset($_POST['subject']) ? $_POST['subject'] : '') ?>"></div>
                    <div class="form-group">Bericht:  <span class="error">*</span><textarea rows="5" class="form-control" placeholder="Vul hier in" cols="22" name="content"><?php echo (isset($_POST['comment']) ? $_POST['content'] : '') ?></textarea></div>
                    <br>
                    <div class="form-group"><input class="btn btn-primary" type="submit" name="toquestion" value="Verstuur vraag"></div>
                </form>
            </div>
            <div class="col-md-4"><!--Rechter kant--></div> 
        </div>
    </body>
</html>