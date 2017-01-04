<?php

/** --- B A S E F U N C T I O N S ---
    This file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "components";


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
            <div class="row">
                <!--Nav Bar -->
                <nav class="col-md-3 ps-docs-sidebar hidden-xs">
                    <?php
                    $navItems = $components;
                    include("./snippets/navigation.php");?>
                </nav>
                <!--Main Content -->
                <div class="col-md-9" id="mainContent">
                    <h1>Components</h1>
                    <br>
                    <div class="row">
                        <div class="col-md-8">

                            This is an overview of useful Protostrap components. <br>Components help you speed up your prototyping. Simply copy the code snippets below and paste them in your code.

                        </div>
                    </div>


                    <?php
                    $sections = $components;
                    $pageName = "components";

                    foreach ($components as $key => $component) {
                    $effect = $component['markup'];
                    if(isset($component['effect'])){
                    $effect = $component['effect'];
                    }
                    ?>


                    <h2 id="<?php echo $key ;?>" style="margin-top: 0;padding-top: 60px;"><?php echo $component['title'] ;?></h2>

                    <tr>
                        <td style="max-width:600px">
                            <?php echo $component['description'] ;?><br>
                            <div class="micropadding"></div>
                            <?php
                                if(isset($component['include'])){
                                    include("./snippets/components_".$component['include'].".php");
                                } else {
                                    echo $effect ;
                                }
                            ?>
                            <br>
                            Markup:
                            <br><pre><code class="html"><?php echo htmlentities($component['markup']) ;?></code></pre>
                        </td>
                    </tr>
                    <?php } ?>

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
