<?php

/** --- B A S E F U N C T I O N S ---
    This file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "cheatsheet";

// get snippets
$files = scandir('addons/sublime/');
$snippets = array();
foreach($files as $file) {
    if(strlen($file) < 10){continue;}
        //do your work here
     //var_dump($file);
     $snippet = file_get_contents('addons/sublime/'.$file);
     $p = xml_parser_create();
    xml_parse_into_struct($p, $snippet, $vals, $index);
    xml_parser_free($p);
    // echo "Index array\n";
    // print_r($index);
    // echo "\nVals array\n";
    //var_dump($vals);
    //$hide = array("carousel","acc","acgr","formchk","inputdate");
    $hide = array("testsnippet");

    if(!isset($vals[7]['value'])){
         var_dump($vals)    ;
    }
    $content = $vals[1]['value'];
    //var_dump() ;
    $suchmuster = '|[\\\]|i';
    $ersetzung = '';
    $content =  preg_replace($suchmuster, $ersetzung, $content);

    $suchmuster = '|\$\{[0-9]\}|i';
    $ersetzung = '';
    $content =  preg_replace($suchmuster, $ersetzung, $content);

    $suchmuster = '|\$\$0|i';
    $ersetzung = '$var';
    $content =  preg_replace($suchmuster, $ersetzung, $content);

    $suchmuster = '|\$1|i';
    $ersetzung = '';
    $content =  preg_replace($suchmuster, $ersetzung, $content);

    $suchmuster = '|\$\{[0-9]:([^}]*)\}|i';
    $ersetzung = '$1';
    $content =  preg_replace($suchmuster, $ersetzung, $content);

    $suchmuster = '/\$\{[0-9]:(pre|post)/i';
    $ersetzung = '$1';
    $content =  preg_replace($suchmuster, $ersetzung, $content);

    $suchmuster = '/- Protostrap/i';
    $ersetzung = '';
    $desc =  preg_replace($suchmuster, $ersetzung, $vals[5]['value']);

    $snippets[$vals[3]['value']]=array("content"=>$content,"tabtrigger"=>$vals[3]['value'], "description"=>$desc, "type"=>$vals[7]['value']);
}

?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $brand ;?></title>
        <?php
        // this includes all the markup that loads css files and similar stuff,
        // if you have to add more css, that's the place to do it.
        // DO NOT REMOVE
        include('./snippets/meta_headTag.php');?>
        <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/default.min.css"> -->
        <style>

        </style>
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </head>
    <body class="header-fixed">
    <?php include("snippets/navBarTop.php");?>
        <div class="container">

            <h1>Protostrap Sublime Cheatsheet</h1>
            <br>
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                  <li class="active"><a href="#maintab1" data-toggle="tab">Snippets</a></li>
                                  <li><a href="#maintab2" data-toggle="tab">Key Bindings</a></li>
                                  <!-- <li><a href="#maintab3" data-toggle="tab">Patterns</a></li> -->
                            </ul>
                            <div class="tab-content">
                                <br>

                                <div class="tab-pane active" id="maintab1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Snippets</h4>
                                            We have a series of snippets we use and this cheatsheet helps us keep track of whick shortcut triggers which snippet.
                                        </div>
                                    </div>
                                    <!-- TAB 1 CONTENT -->

                                        <br>

                                        <table class="table table-condensed">
                                        <tr>

                                                <th>Shortcut</th>
                                                <th>Name and Snippet</th>
                                            </tr>
                                        <?php foreach ($snippets as $key => $snippet) {
                                            if (in_array($key, $hide)) {
                                                continue;
                                            }


                                            $type =  $snippet['type'];
                                            $codeClass = "html";
                                            if($type == "JavaScript" OR $type == "jQuery"){
                                                $codeClass = "JavaScript";
                                            }
                                            $content = $snippet['content'];
                                            if(strpos($content, "<?php") === 0){
                                                $codeClass = "PHP";
                                            }

                                            ?>

                                            <tr>
                                                <td><?php echo $snippet['tabtrigger'] ;?></td>
                                                <td><?php echo trim($snippet['description']). ". &nbsp;&nbsp;<small>Type: ".$type."</small>" ;?><div class="micropadding"></div><pre><code class="<?php echo $codeClass ;?>"><?php  echo htmlentities($content) ;?></code></pre></td>

                                            </tr>
                                        <?php } ?>
                                        </table>
                                    <!-- TAB 1 CONTENT  END -->
                                </div>
                                <div class="tab-pane " id="maintab2">
                                    <!-- TAB 2 CONTENT -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Key Bindings</h4>
                                            To make things even easier we have a series of key bindings for the most often used snippets - macOS only.
                                            <br><br>
                                        </div>
                                    </div>

                                        <table class="table table-condensed">
                                            <tr>
                                                <th>Key&nbsp;Binding&nbsp;&nbsp;</th>
                                                <th>Name and Snippet</th>
                                            </tr>
                                        <?php foreach ($keyBindings as $key => $binding) {
                                                $snippet = $snippets[$key];
                                                $type =  $snippet['type'];
                                                $codeClass = "html";
                                                if($type == "JavaScript" OR $type == "jQuery"){
                                                    $codeClass = "JavaScript";
                                                }
                                                $content = $snippet['content'];
                                                if(strpos($content, "<?php") === 0){
                                                    $codeClass = "PHP";
                                                }
                                            ?>

                                            <tr>
                                                <td><?php echo $binding ;?></td>
                                                <td><?php echo $snippet['description'] ;?>
                                                    <pre><code class="<?php echo $codeClass ;?>"><?php echo htmlentities($snippet['content']) ;?></code></pre>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </table>
                                    <!-- TAB 2 CONTENT  END -->
                                </div>
                            </div>
                        </div>
                        <!-- ** End of TABS ** -->






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
