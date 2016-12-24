<?php

/** --- B A S E F U N C T I O N S ---
    This file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "start";


?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $brand ;?></title>
        <?php
        // this includes all the markup that loads css files and similar stuff,
        // if you have to add more css, that's the place to do it.
        // DO NOT REMOVE
        include('./snippets/meta_headTag.php');?>

    </head>
    <body class="header-fixed">
    <?php include("snippets/navBarTop.php");?>
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <br>
                    <h1>Getting Started</h1>
                    <br>
                    <h3>A word of caution</h3>
                    <?php box("<b>Do NOT use this in a production environment</b><br>Protostrap is prototyping software and therefore lacks all security features needed for production.", "info", "inherit" , "boxid" , "" ); ?>

                    Getting started is the hardest part of getting into Protostrap. Once you are up and running you have overcome the biggest obstacles. <br> <br>
                    <?php include(snippet("divider"));?>

                    <h3 id="requirements">Requirements</h3>

                    <div class="row">
                        <div class="col-md-8">
                            You need a local webserver with any recent version of PHP. <br><br>
                            If you see something else than an error message in the window on the right, you have a running webserver and it can be called via <a href="http://localhost">http://localhost</a>

                        </div>
                        <div class="col-md-4">
                            <iframe src="http://localhost" frameborder="1"></iframe>
                        </div>
                    </div>

                    <strong>MAMP</strong><br>
                    The easiest way to have a running webserver both on OS X and Windows is by using <a href="">MAMP</a>.
                    <br><br>
                    Download, install and start MAMP. <br><br>

                    To finish the installation:<br>
                    <ul>
                        <li>Open the MAMP preferences</li>
                        <li>Open to the <b>Ports</b> tab</li>
                        <li>Click on the <b>Set Web & MySQL port to 80 and 3306</b> Button.</li>
                        <li>Restart the server. It will not work without restart!</li>
                        <li>You now have a local webserver running under <a href="http://localhost">http://localhost</a></li>
                    </ul>
                    <img class="img-responsive" src="assets/img/mampPrefs.gif" alt="Mamp Preferences">


                    <?php include(snippet("divider"));?>

                    <h3 id="Installation">Installing Protostrap</h3>
                    <ul>
                        <li>Download Protostrap and unzip it. <br>This will give you a folder called <b>Protostrap-master</b></li>
                        <li>You can rename it something that makes more sense for you.</li>
                        <li>
                            Move the folder inside the MAMP "htdocs" folder which is located in the MAMP Application directory /Applications/MAMP. This folder is called "Document Root". (You can change the path for the Document Root in the MAMP application's Preferences Panel)
                        </li>
                        <li>
                            You're done! You can access Protostrap in the browser via: <a href="http://localhost/protostrap">http://localhost/protostrap</a><br>(assuming you have named the folder protostrap.)
                        </li>
                    </ul>

                </div>
                <div class="col-md-3">

                </div>
            </div>




            <?php // this includes the footer
            include('./snippets/footer.php');?>

        </div> <!-- /container -->

        <?php
        // JAVASCRIPT
        // This includes the needed javascript files
        // DO NOT REMOVE
        include ('./snippets/meta_javascripts.php');?>
  </body>
</html>
