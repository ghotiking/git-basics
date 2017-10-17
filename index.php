<?php

$activesection = "homepage";

$title = "This is my page title";
$keywords = "keywords goe here";
$description = "meta description goes here.";

$quoteone = "testimonial one goes here";
$quoteonename = "Name - City, TX";
$quotetwo = "testimonial two goes here";
$quotetwoname = "Name - City, TX";
$quotethree = "testimonial three goes here";
$quotethreename = "Name - City, TX";

$scripts = "


" ;

include 'inc.head.php';

include 'inc.body-header.php';

?>

            <div id="slider">

                <div style="display:block;"><a href=""><img src="_images/slide-1.jpg" /></a></div>
                <div style="display:none;"><a href=""><img src="_images/slide-2.jpg" /></a></div>
                <div style="display:none;"><a href=""><img src="_images/slide-3.jpg" /></a></div>
                <div style="display:none;"><a href=""><img src="_images/slide-4.jpg" /></a></div>
                <!-- NOTES -->

            </div><!-- END SLIDER -->


            <div class="main">


                <div id="ticker-wrapper">
                    

                </div><!-- END TICKER-WRAPPER -->


                <h1>title</h1>
                
                <h2>subtitle.</h2>

                <h3>sub sub title.</h3>
				

                <p>paragraph.</p>




<?php 

include 'inc.sidebar.php';
include 'inc.body-footer.php';

 ?>