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
        <h1>Credits</h1>
        <br>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                <p class="lead">Protostrap is standing on the shoulers of giants. <br>
                Without the hard work and passion of friends, developers and designers, Protostrap wouldn't be as great as it is. <br><br>The entire list of giants:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
        <h3>Plugins and Libraries</h3>
        <div class="micropadding"></div>
                <?php foreach ($pluginsAndLibraries as $key => $plugin) { ?>
                <a href="<?php echo $plugin['link'] ;?>"><?php echo $plugin['title'] ;?></a>
                <p><?php echo $plugin['text'] ;?></p>
                <div class="micropadding"></div>
                <?php } ?>
<!--             </div>



            <div class="col-md-6"> -->
                <h3>Icons</h3>
                <div class="micropadding"></div>
                <?php foreach ($iconfonts as $key => $iconfont) { ?>
                <a href="<?php echo $iconfont['link'] ;?>"><?php echo $iconfont['title'] ;?></a>
                <p><?php echo $iconfont['text'] ;?></p>
                <div class="micropadding"></div>
                <?php } ?>
                <!-- <h3>Contributors</h3>
                <div class="micropadding"></div>
                <?php foreach ($contributors as $key => $contributor) { ?>
                <b><?php echo $contributor['name'] ;?></b><br>
                <?php echo $contributor['role'] ;?><br>
                <i class="fa fa-link"></i>:&nbsp;<a href="<?php echo $contributor['link'] ;?>"><?php echo $contributor['link'] ;?></a><br>
                <i class="fa fa-twitter"></i>:<a href="https://twitter.com/<?php echo $contributor['twitter'] ;?>">&nbsp;@<?php echo $contributor['twitter'] ;?></a>
                <div class="micropadding"></div>
                <?php } ?> -->
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <hr>
                <h3>Icons used on this Site</h3>
                Cake: <a href="https://thenounproject.com/simgebu/">Sinistrad, The Noun Project</a> (modified)<br>
                Spreadsheet: <a href="https://thenounproject.com/OliverT/">TDL-London, The Noun Project</a><br>
                User Group: <a href="https://thenounproject.com/Milky/">Milky - Digital Innovation, The Noun Project</a><br>
                Hammer: <a href="https://thenounproject.com/jjjon/">Jonathan-Li, The Noun Project</a> (modified)<br>
                <br>
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
