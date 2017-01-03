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
                <!--Nav Bar -->
                <nav class="col-md-3 ps-docs-sidebar hidden-xs">
                    <?php
                    $navItems = $gettingStarted;
                    include("./snippets/navigation.php");?>

                </nav>
                <!--Main Content -->
                <div class="col-md-9" id="mainContent">
                    <h1>Getting Started</h1>

                    <div class="row">
                        <div class="col-md-8">
                            <br>
                            Setting up is the hardest part of getting into Protostrap. It is not a single tool that comes in a nicely wrapped box. It is more like a DIY instrument that needs to be assembled.
                            <br><br>Once you are up and running you will have overcome the biggest obstacles.
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>


                    <?php
                    $sections = $gettingStarted;
                    $pageName = "gettingStarted";
                    include("./snippets/contentSections.php");?>

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
