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
<<<<<<< HEAD
        <title><?php echo $brand ;?>: Setup</title>
        <meta name="description" content="Learn how to setup Protostrap and optimize all tools needed to get the most out of it.">
=======
        <title><?php echo $brand ;?> - Setup</title>
>>>>>>> origin/master
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
                    <h1>Setup</h1>

                    <div class="row">
                        <div class="col-md-8">
                            <br>
                            <p class="lead">Setting up is the hardest part of getting into Protostrap. It is not a single tool that comes in a nicely wrapped box. It is more like a DIY instrument that needs to be assembled.
                            <br><br>Once you are up and running you will have overcome the biggest obstacles.</p>
                            <div class="hidden-lg hidden-md">
                                <?php
                                $navItems = $gettingStarted;
                                include("./snippets/tableofcontent.php");?>
                            </div>
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

        <div class="modal fade" id="phpBasics" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">PHP Basics</h4>
                    </div>
                    <div class="modal-body">
                        <h2>10 PHP topics to get you through Protostrap</h2>
                        This list contains all topics you need to know to be a master prototyper with Protostrap. <br>
                        <br><br>
                            <?php foreach ($phpBasics as $key => $item): ?>
                                <div class="flexbox">
                                    <div class="fix20"><?php echo $key ;?></div>
                                    <div class="flex-1"><?php echo $item['text'] ;?></div>
                                    <div class="fix180"><a href="<?php echo $item['link'] ;?>" class="">Documentation</a></div>
                                </div>
                                        <hr>
                            <?php endforeach ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <?php
        // JAVASCRIPT
        // This includes the needed javascript files
        // DO NOT REMOVE
        include ('./snippets/meta_javascripts.php');?>
  </body>
</html>
