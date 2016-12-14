<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">Bijlesjuf</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="information.php">Informatie</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="review.php">Review</a></li>
                <?php if($_SESSION['user']['role'] == 'admin') { ?>
                <li><a href="form.php">Inschrijven</a></li>
                <?php } ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
      	        <?php if($_SESSION['user']['role'] == 'Ouder' || $_SESSION['user']['role'] == 'Kind' || $_SESSION['user']['role'] == 'admin') { ?>
      	        <li><a href="logout.php"><span class="glyphicon glyphicon-ok"></span> U bent ingelogd, log hier uit</a></li>
      	        <?php } else { ?>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
 </nav>


