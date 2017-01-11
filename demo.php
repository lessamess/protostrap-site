<?php

/** --- B A S E F U N C T I O N S ---
    This file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "";


?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $brand ;?></title>
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
        <h1>Demos</h1>
        <br>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                <p class="lead">Check out Protostrap's scope with these three demos.</p>
            </div>
        </div>
        <br>
        <div class="row flex-row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top imgborderbottom" src="assets/img/pillowsandpansstart.jpg" alt="Pillow & Pan Demo App">
                    <div class="card-block">
                        <h3 class="card-title">«Pillow & Pan» App</h3>
                        <p class="card-text">A fake shopping app with basic functions including: page transitions, search and filters, buy now option with checkout, wishlist and "save as favorite". Try the search with the following search terms: blanket, pan or apron. <br><br></p>
                        <div class="micropadding"></div>
                        <a href="javascript:void(0);" class="btn btn-success btn-block btn-lg">Demo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top imgborderbottom" src="assets/img/pillowsandpansdesktop.jpg" alt="Pillow & Pan ">
                    <div class="card-block">
                        <h3 class="card-title">«Pillow & Pan» Desktop</h3>
                        <p class="card-text">A fake shop with basic functions including: main pages like start page, search result page and product detail site as well as a search and filter functions. Try the search with the following search terms: blanket, pan or apron. <br><br></p>
                        <div class="micropadding"></div>
                        <a href="javascript:void(0);" class="btn btn-success btn-block btn-lg">Demo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top imgborderbottom" src="assets/img/protostrapplain.jpg" alt="Protostrap Plain">
                    <div class="card-block">
                        <h3 class="card-title">Protostrap Plain</h3>
                        <p class="card-text">This is the default site you get, once you open up a protostrap-master site. Protostrap Plain includes a default navigation and footer as well as links to the admin panel, the test page with all plugins. On top, Protostrap Plain is responsive and ready to go. </p>
                        <div class="micropadding"></div>
                        <a href="javascript:void(0);" class="btn btn-success btn-block btn-lg">Demo</a>
                    </div>
                </div>
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
