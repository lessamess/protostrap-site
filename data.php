<?php

/** --- B A S E F U N C T I O N S ---
    This file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "data";


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

                    <h1>Protostrap's Data Layer</h1>
                    Protostrap makes it easy to have reusable data instead of hardcoded content inside pages.

                    <?php foreach ($dataLayer as $key => $value):
                        if(file_exists("./snippets/".$value['id'].".php")){?>
                            <h3><?php echo $value['title'] ;?></h3>

                            <?php include(snippet($value['id'])); ?>
                            <?php include(snippet("divider"));?>
                        <?php }


                    endforeach ?>









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
