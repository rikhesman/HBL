<?php 
if(empty($_SESSION['user']['role'])) {
	$_SESSION['user']['role'] = 'gast';
}
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Bijlesjuf</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="information.php">Informatie</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php if($_SESSION['user']['role'] == 'Ouder' OR $_SESSION['user']['role'] == 'Kind') { ?>
        <li><a href="review.php">Review</a></li>
        <?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	 <?php if($_SESSION['user']['role'] == 'Ouder' OR $_SESSION['user']['role'] == 'Kind') { ?>
      	 <li><a href="logout.php"><span class="glyphicon glyphicon-ok"></span> U bent Ingelogd, Log hier uit</a></li>
      	 <?php } else { ?>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
 </nav>


