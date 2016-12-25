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
                    <ul id="sidebar" class="nav nav-stacked fixed">

                        <?php foreach ($gettingStarted as $key => $navItem): ?>
                            <li>
                                <a href="#<?php echo $key ;?>"><?php echo $navItem['title'] ;?></a>

                                <ul class="nav nav-stacked">
                                    <li><a href="#<?php echo $key ;?>1">Sub-Group 1</a></li>
                                    <li><a href="#<?php echo $key ;?>2">Sub-Group 2</a></li>
                                </ul>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </nav>
                <!--Main Content -->
                <div class="col-md-9" id="mainContent">
                    <h1>Getting Started</h1>

                    Getting started is the hardest part of getting into Protostrap. <br>Once you are up and running you have overcome the biggest obstacles.


                    <?php foreach ($gettingStarted as $key => $section): ?>

                        <section  class="">
                            <a id="<?php echo $key ;?>"></a>
                            <h2 style="margin-top: 0;padding-top: 60px;"><?php echo $section['title'] ;?></h2>
                            <?php if(file_exists("snippets/gettingStarted_".$key.".php")){
                                include("snippets/gettingStarted_".$key.".php");
                                } ?>
                            <div id="<?php echo $key ;?>1" class="hide">
                                <h4><?php echo $section['title'] ;?> Sub 1</h4>
                            </div>
                        </section>
                    <?php endforeach ?>

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
