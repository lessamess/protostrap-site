<?php

/** --- B A S E F U N C T I O N S ---
    This file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "javascript";
ksort($jsHelperClasses);
foreach ($jsHelperClasses as $key => $class) {
    $javascript['helperClasses']['sub'][$key]['title'] = $key;
}

ksort($jsFunctions);
foreach ($jsFunctions as $key => $class) {
    $javascript['functions']['sub'][$key]['title'] = $key;
}

?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $brand ;?> - Javscript</title>
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
                <nav class="col-md-2 ps-docs-sidebar hidden-xs">
                    <?php
                    $navItems = $javascript;
                    include("./snippets/navigation.php");?>
                </nav>
                <!--Main Content -->
                <div class="col-md-10" id="mainContent">
                    <h1>JavaScript</h1>
                    <br>
                    <div class="row">
                        <div class="col-md-8">
                            <p class="lead">This is an overview of useful Helper Classes and Javascript functions. <br>
                            They help you make your prototype interactive and playful.</p>
                            <div class="hidden-lg hidden-md">
                                <?php
                                $navItems = $javascript;
                                include("./snippets/tableofcontent.php");?>
                            </div>
                        </div>
                    </div>
                    <?php
                    $sections = $javascript;
                    $pageName = "javascript";
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
