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
        <meta name="description" content="Protostrap: Build clickable prototypes faster than ever with the most advanced, free prototyping tool. ">

        <?php
        // this includes all the markup that loads css files and similar stuff,
        // if you have to add more css, that's the place to do it.
        // DO NOT REMOVE
        include('./snippets/meta_headTag.php');?>
        <style>
            body {
                background-image: url("assets/img/poppy_corner.svg");
                background-position: -300px -240px ;
                background-size: 500px;
                background-repeat: no-repeat;
            }
            @media screen and (max-width : 991px)  {
                body {
                    background-image: url("assets/img/poppy_corner.svg");
                    background-position: -240px -192px ;
                    background-size: 400px;
                    background-repeat: no-repeat;
                }
            }
            @media screen and (max-width : 441px)  {
                body {
                    background-image: url("assets/img/poppy_corner.svg");
                    background-position: -120px -96px ;
                    background-size: 200px;
                    background-repeat: no-repeat;
                }

            }

        </style>
    </head>
<?php

// uncomment the following function to force user to be logged in
// forceLogin(); ?>

    <body class="">
        <div class="container" id="mainContent">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
                    <br>
                    <br>
                        <div class="flexbox">
                            <div class="flex-1"></div>
                            <div class="flex-1">
                                <div class="flexbox">
                                    <div class="fixed-size-120 hide">
                                        <img src="assets/img/poppy.svg" style="padding:  0px 12px 0 0;" class="img-responsive " alt="">
                                    </div>
                                    <div class="flex-1">
                                        <h1 class="superlarge">Protostrap</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1"></div>
                        </div>
                        <div class="micropadding"></div>


                    <div class="align-center">
                        <p class="sub" style="font-size:28px">Build clickable prototypes faster than ever <br class="visible-lg"> with the most advanced, free prototyping tool.</p>
                        <span class="hidden-xs"><br>
                            <a class=" btn btn-success btn-lg" href="https://github.com/lessamess/Protostrap/archive/master.zip">
                                <i class="fa fa-download"></i> Download Protostrap
                            </a>
                            <a class=" btn btn-default btn-lg" href="start.php">
                                <i class="fa fa-book"></i> Read Documentation
                            </a>
                            <br>
                            <div class="micropadding"></div>
                            <small>Current Version: v<?php echo $protostrapVersion ;?></small>
                            <br>
                            <br>
                        </span>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row background-green">
                <div class="col-md-6">
                    <h2 class="nopadding">Protostrap in a nutshell</h2>
                    <p class="lead">Protostrap is an easy to learn, simple yet effective prototyping tool. It let's you build highly interactive prototypes for desktop or mobile in no time. With Protostrap you can show entire processes with real data and microinteractions. Your prototype will be like the real deal - before the real deal.</p>
                    <p class="lead">Protostrap is an open source framework and <b>free</b>! </p>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="assets/img/pillowsandpansstart.gif" alt="" style="border: 1px solid lightgrey;">
                </div>
            </div>
            <div class="micropadding"></div>
            <br>
            <div class="micropadding hidden-md"></div>
            <div class="row">
                <div class="col-md-8">
                    <h2 class="nopadding">Why Protostrap?</h2>
                    <p class="lead">There are tons of prototyping tools out there – each one of them covers a different need. Protostrap's strength lays in its flexibility and its data drivenness. It is aimed at designers who want to design complex processes and know the basics of PHP, Javascript, HTML & CSS.</p>
                </div>
                <div class="col-md-4">
                </div>
            </div>
            <div class="row flex-row">
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img src="assets/img/cake.svg" class="card-img-top img-responsive whyimg align-center" alt="">
                        <div class="card-block">
                        <h4>Easy to learn</h4>
                        Based on Twitter Bootstrap with sprinkles of PHP. Protostrap is easy to get into yet allows a high level of customization for the more advanced users. All you need to get started is a code editor like Sublime Text.
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img src="assets/img/data.svg" class="card-img-top img-responsive whyimg align-center" alt="">
                        <div class="card-block"><h4>Data Driven yet simple</h4>
                        Protostap lets you build prototypes based on real data - even large amounts of data. Simply store your data in a Google Spreadsheet and link the sheet to your prototype. No Database and no complex queries involved!
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img src="assets/img/user.svg" class="card-img-top img-responsive whyimg align-center" alt="">
                        <div class="card-block"><h4>Session & role based</h4>
                        Protostrap lets you simulate role based experiences with as many userroles you need. Protostrap is also session based. This is perfect for user testing: Data can be changed and the changes are effective until the session is reset.
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img src="assets/img/power.svg" class="card-img-top img-responsive whyimg align-center" alt="">
                        <div class="card-block"><h4>Powerful extentions</h4>
                        Protostrap comes with a set of ready-to-use snippets for the code editor sublime. This makes building the interface fast. Protostrap also contains a series of workflows like user-login, live-search and google search simulations.
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h2 class="nopadding">Showcases</h2>
            <div class="row flex-row">
                <?php foreach ($showcases as $key => $showcase) { ?>
                <div class="col-md-4">
                    <div class="card" style="margin-bottom: 30px;">
                        <figure>
                          <img src="<?php echo $showcase['bild'] ;?>" class="card-img-top img-responsive" alt="Static Image" data-alt="<?php echo $showcase['gif'] ;?>">
                        </figure>

                        <div class="card-block">
                           <h3 class="nomargin"><?php echo $showcase['title'] ;?></h3>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 align-center">
                    <a class=" btn btn-default btn-lg" href="demo.php">Check out our Demos</a>
                </div>
            </div>
            <br>
            <br>

            <hr>
            <br>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 align-center">
                    <h1 class="superlarge">Protostrap</h1>
                    <br>
                    <p class="sub">Build clickable prototypes faster than ever with the most advanced, free prototyping tool.</p>
                    <span class="hidden-xs"><br>
                        <a class=" btn btn-success btn-lg" href="https://github.com/lessamess/Protostrap/archive/master.zip">
                            <i class="fa fa-download"></i> Download Protostrap
                        </a>
                        <a class=" btn btn-default btn-lg" href="start.php">
                            <i class="fa fa-book"></i> Read Documentation
                        </a>
                        <br>
                        <div class="micropadding"></div>
                        <small>Current Version: <?php echo $protostrapVersion ;?></small>
                    </span>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>

<!--             <a href="index.php">V0</a> &nbsp;&nbsp;<a href="index_v1.php">V1</a> &nbsp;&nbsp;<a href="index_v2.php">V2</a>
 -->

        </div>
        <div class="container">
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
