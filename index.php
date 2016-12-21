<?php include('includes/autoloader.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('build/head.php'); ?>
    </head>
    <body>
        <?php include('build/navbar.php');
        //$screenWidth = ?> <script type = "text/javascript">document.getElementById("test").innerHTML= 'screen.width'</script>
        <?php //print ('<style>@media (max-width:768 px) and (min-width:384px){
                //.carousel.slide{
                //  margin-left: 50px;
                //}
            //}
//</style>');

        ?>
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            
            <!-- Indicators -->


            <!-- Wrapper for slides -->
            <div class="carousel-inner" >
                <?php
                $dir = 'foto\Slideshow/';
                $count = true;
                $total = 0;
                $dir_contents = glob($dir . "*.jpg");
                $countSlide = TRUE;
                //hierboven staan de variabelen voor foto's en de indicators, hieronder de functies
                foreach ($dir_contents as $file) {
                    ?>
                    <div class="item <?php
                    if ($count == true) {
                        echo 'active';
                        $count = false;
                    }
                    ?>"><img class="img-responsive center-block" src="<?php echo $file; ?>" alt="error" /></div>
                         <?php
                         $total ++;
                     }
                     /* hier maak ik de indicators aan per foto */
                     ?>
            </div>
            <ol class="carousel-indicators">
                <?php
                for ($i = 0; $i < $total; $i++) {
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if ($countSlide == true) {
                        ?>
                            class="active"
                            <?php
                            $countSlide = false;
                        }
                        ?>></li>
    <?php
}
?>
            </ol>
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
            <div class="col-md-3">
                <!--Linker kant-->
            </div>
            <div class="col-md-6">
            	<br>
                <h3>Welkom op de website van &ldquo;De Bijlesjuf&rdquo;.</h3>
                <br>
                <p class="p1">
                    &ldquo;De Bijlesjuf&rdquo; verzorgt bijlessen in rekenen,
                    spelling en begrijpend lezen aan basisschoolleerlingen.<br>
                    Zij kan dyslectische kinderen begeleiden bij hun lees- en/of
                    spellingproblemen. Daarnaast kunnen leerlingen van groep 8
                    geholpen worden met hun voorbereiding op hun Cito eindtoets.<br>
                    Door allerlei omstandigheden kunnen leerlingen achterstanden/hiaten
                    in het onderwijs oplopen.<br>
                    Individuele hulp kan uitkomst bieden.<br>
                    In een rustige omgeving kunnen ze &ldquo;1 op 1&rdquo; instructie
                    krijgen, wat juist dat zetje zal geven dat uw kind nodig heeft
                    om weer aan te sluiten bij de groep.
                </p>
                <h3>Waarom bijles:</h3>
                <p class="p1">
                    Sommige kinderen krijgen de instructie in de groep niet mee,
                    wat kan komen door de groepsgrootte, het te snelle tempo, een
                    leerachterstand, concentratieproblemen of het niet begrijpen
                    van de stof.<br>
                    Wanneer er dan niets aan gedaan wordt, kunnen deze hiaten
                    alleen maar groter worden.<br>
                    Op school ontbreekt het vaak aan de tijd en de middelen om
                    dit te verhelpen.<br>
                    Door tijdelijk hulp van buitenaf te geven, in een 1 op 1
                    situatie, komt deze instructie beter over en zal uw kind met
                    meer plezier naar school toe gaan.
                    <br>
                    <br>
                </p>
            </div>
            <div class="col-md-3">
                <!--Rechter kant-->
        </div>
        </div>
    </body>
</html>