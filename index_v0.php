<?php

/** --- B A S E F U N C T I O N S ---
    This file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "one";


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
<?php

// uncomment the following function to force user to be logged in
// forceLogin(); ?>

    <body class="">
        <div class="container" id="mainContent">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 col-lg-offset-3 col-md-offset-2 col-sm-offset-1 align-center">
                    <h1 class="superlarge">Protostrap</h1>
                    <br>
                    <p class="sub">Build clickable prototypes faster than ever with the most advanced prototyping tool.</p>
                        <span class="hidden-xs"><br>
                            <a class=" btn btn-success btn-lg" href="https://github.com/lessamess/Protostrap/archive/master.zip">
                                <i class="fa fa-download"></i> Download Protostrap
                            </a><br>
                            <small>Currently v3.0</small>
                        </span>
                    <br>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>Easy to learn</h4>
                    Based on Twitter Bootstrap with sprinkles of PHP. Protostrap is easy to get into yet allows a high level of customization for the more advanced users. All you need to get started is a code editor like Sublime Text.
                    <br><br>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Data Driven yet simple</h4>
                    Protostap lets you build prototypes based on real data - even large amounts of data. Simply store your data in a Google Spreadsheet and link the sheet to your prototype. No Database and no complex queries involved!
                    <br><br>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Session & role based</h4>
                    Protostrap lets you simulate role based experiences with as many userroles you need. Protostrap is also session based. This is perfect for user testing: Data can be changed and the changes are effective until the session is reset.
                    <br><br>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Powerful extentions</h4>
                    Protostrap comes with a set of ready-to-use snippets for the code editor sublime. This makes building the interface fast. Protostrap also contains a series of workflows like user-login, live-search and google search simulations.
                    <br><br>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-12 align-center">
                    <a href="start.php">Read the Documentation</a> <br><br>

                    <h3>Featuring</h3>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <?php foreach ($featureTeaser as $key => $feature) {
                                echo $feature['title']." - ";
                            } ?>Typeahed Search & Table filtering

                            <br><br>
                            <a href="https://github.com/lessamess/Protostrap"><i class="fa fa-github"></i> Protostrap on Github</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="container">
            <a href="index.php">V0</a> &nbsp;&nbsp;<a href="index_v1.php">V1</a> &nbsp;&nbsp;<a href="index_v2.php">V2</a>

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
