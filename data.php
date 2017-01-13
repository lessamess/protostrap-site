<?php

/** --- B A S E F U N C T I O N S ---
    This file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "data";
$names = get_spreadsheetData("https://docs.google.com/spreadsheets/d/1_WzhyY-_ZLZoKAaSvGv5UBKPBzuxtJwmZWgyL0JF-wU/edit?usp=sharing", "names");


?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $brand ;?>: Using Data</title>
        <meta name="description" content="Protostrap lets you have reusable data instead of hardcoded content inside your prototpye pages. Learn how to have a robust Data Layer with data from easy to use sources.">

        <?php
        // this includes all the markup that loads css files and similar stuff,
        // if you have to add more css, that's the place to do it.
        // DO NOT REMOVE
        include('./snippets/meta_headTag.php');?>
        <link href="<?php echo $pathToAssets ;?>core/assets/css/ionicons.min.css" rel="stylesheet">
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </head>
    <body class="header-fixed">
    <?php include("snippets/navBarTop.php");?>
        <div class="container">

            <div class="row">
                <!--Nav Bar -->
                <nav class="col-md-3 ps-docs-sidebar hidden-xs">
                    <?php
                    $navItems = $dataLayer;
                    include("./snippets/navigation.php");?>
                </nav>
                <!--Main Content -->
                <div class="col-md-9" id="mainContent">
                    <h1>Using Data</h1>
                    <br>
                    <div class="row">
                        <div class="col-md-8">

                                 <p class="lead">  Protostrap makes it easy to have reusable data instead of hardcoded content inside pages. It has a robust Data Layer that can get its data from different easy to use sources.</p>
                            <div class="hidden-lg hidden-md">
                                <?php
                                $navItems = $dataLayer;
                                include("./snippets/tableofcontent.php");?>
                            </div>
                        </div>
                    </div>


                    <?php
                    $sections = $dataLayer;
                    $pageName = "dataLayer";
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

