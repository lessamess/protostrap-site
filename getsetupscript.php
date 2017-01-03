<?php

/** --- B A S E F U N C T I O N S ---
    This file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "one";

if(!empty($_POST['script'])){
        $script = $_POST['script'];
        $script = preg_replace("|\r|", "", $script);
        header("Content-Type: text/plain; charset=utf-8");
        header ( "Content-Disposition: attachment; filename=setup.sh" );
            echo $script ;
        die();

    }

$script = file_get_contents('setup.txt');

$path = "/Library/WebServer/Documents";
$localhost = "http://localhost";

if(!empty($_POST['path'])){
    $path = $_POST['path'];
}
if(!empty($_POST['localhost'])){
    $localhost = $_POST['localhost'];
}

$script = preg_replace("|--localhost--|", $localhost, $script);
//$script = preg_replace("|--localhost--|", $localhost, $script);

?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>Setup Script for Protostrap</title>
        <?php
        // this includes all the markup that loads css files and similar stuff,
        // if you have to add more css, that's the place to do it.
        // DO NOT REMOVE
        include('./snippets/meta_headTag.php');?>

    </head>
<?php

// uncomment the following function to force user to be logged in
// forceLogin(); ?>

    <body class="header-fixed">
        <div class="container">




                <h2>Get the Protostrap setup script.</h2>


                <h3>Requirements</h3>
                            <?php if(empty($_POST)){ ?>
                            <form action="getsetupscript.php" method="POST">
                                <div class="row">
                                    <div class="col-md-2">Local server address:</div>
                                    <div class="col-md-3"><input type="text" class="form-control" value="http://localhost" name="localhost" placeholder="The url of your local webserver"></div>
                                    <div class="col-md-3">You must have a local webserver. <a href="http://localhost">Test if you have one</a></div>
                                </div>
                                <br><br>
                                <div class="row ">
                                    <div class="col-md-2">Local server path:</div>
                                    <div class="col-md-3"><input type="text" class="form-control" value="/Library/WebServer/Documents" name="path" placeholder="The path to your local webserver"></div>
                                    <div class="col-md-3">You must know where in your file system your webserver is. <br>   Chances are that it is in the folder <br>  <span class="bg-info">&nbsp;&nbsp;/Library/WebServer/Documents &nbsp;</span></div>
                                </div>
                                <br><br>
                                <div class="row ">
                                    <div class="col-md-3 col-md-offset-2"><button type="submit" class="btn btn-block btn-lg btn-primary">Generate script</button></div>
                                </div>
                            </form>

                            <?php } else { ?>

                                <br><br>
                            <form action="index.php" method="POST">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <textarea name="script" id="" class="form-control" rows="13"><?php echo $script ;?></textarea>
                                    </div>
                                    <div class="col-md-6">

                                    <button type="submit" class="btn btn-lg btn-link"><i class="fa fa-file"></i> Download File </button>

                                    <ol>
                                        <li>Download file</li>
                                        <li>In the Finder app press ⇧⌘G</li>
                                        <li>Enter <?php echo $path ;?></li>
                                        <li>Move the downloaded file to the window containing <?php echo $path ;?></li>
                                        <li>Open the Terminal app</li>
                                        <li>Enter: cd <?php echo $path ;?></li>
                                        <li>Enter: sh setup.sh</li>
                                        <li>Follow instructions.</li>
                                    </ol>

                                    </div>
                                </div>
                            </form>
                            <?php } ?>





        </div> <!-- /container -->

        <?php
        // JAVASCRIPT
        // This includes the needed javascript files
        // DO NOT REMOVE
        include ('./snippets/meta_javascripts.php');?>
  </body>
</html>
