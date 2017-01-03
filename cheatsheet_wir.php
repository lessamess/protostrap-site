<?php
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "map";

// get snippets
$files = scandir('addons/sublime/');
$keys = array("CONTENT","TABTRIGGER", "DESCRIPTION");
$snippets = array();
foreach($files as $file) {
    if(strlen($file)<3){continue;}
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
    $snippets[$vals[3]['value']]=array("content"=>$vals[1]['value'],"tabtrigger"=>$vals[3]['value'], "description"=>$vals[5]['value']);
}


?><!DOCTYPE html>
<html >
    <head>
        <title><?php echo $application . " - " . $brand ;?></title>
        <?php
        // this includes all the markup that loads css files and similar stuff,
        // if you have to add more css, that's the place to do it.
        // DO NOT REMOVE
        include(snippet("meta_headTag"));?>
        <link href="<?php echo $pathToAssets ;?>core/assets/css/ionicons.min.css" rel="stylesheet">
        <?php include("./snippets/mapcss.php");?>
        <style>
        pre code{
            line-height:1;
        }
        </style>
    </head>
    <body class="header-fixed">

        <?php
        // Top-Bar //
        $topBarTitle = "Cheatsheet";
        $topBarRight = "hide";
        include("./snippets/iosTopbar.php");

        // Tab-Bar //
        //include("./snippets/iosTabbar.php");?>

        <div class="container" id="pageTop">
            <!--  ** TABS ** -->
            <div class="tabbable">
                <ul class="nav nav-tabs">
                      <li class="active"><a href="#maintab1" data-toggle="tab">Tastenkürzel</a></li>
                      <li><a href="#maintab2" data-toggle="tab">Snippets</a></li>
                      <!-- <li><a href="#maintab3" data-toggle="tab">Patterns</a></li> -->
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="maintab1">
                        <!-- TAB 1 CONTENT -->

                            <h1>Tastenkürzel</h1>
                            <table class="table table-condensed">
                            <?php foreach ($keyBindings as $key => $binding) { ?>

                                <tr>
                                    <th><?php echo $binding['name'] ;?></th>
                                    <td><?php echo $binding['shortcut'] ;?></td>
                                    <td><pre><?php highlight_string($binding['effect']) ;?></pre></td>
                                    <td>
                                        <?php switch ($binding['show']) {
                                            case "0":
                                                break;
                                            case "1":
                                                echo $binding['effect'] ;
                                                break;
                                            default:
                                                echo $binding['show'];
                                                break;
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </table>
                        <!-- TAB 1 CONTENT  END -->
                    </div>
                    <div class="tab-pane " id="maintab2">
                        <!-- TAB 2 CONTENT -->
                            <h1>Snippets</h1>
                            <table class="table table-condensed">

                            <?php foreach ($snippets as $key => $snippet) {
                                if (in_array($key, $hide)) {
                                    continue;
                                }

                                $suchmuster = '/Protostrap PS/i';
                                $ersetzung = '';
                                $desc =  preg_replace($suchmuster, $ersetzung, $snippet['description']);
                                ?>

                                <tr>
                                    <th><?php echo $desc ;?></th>
                                    <td><?php echo $snippet['tabtrigger'] ;?></td>
                                    <td><pre><?php highlight_string($snippet['content']) ;?></pre></td>

                                </tr>
                            <?php } ?>
                            </table>
                        <!-- TAB 2 CONTENT  END -->
                    </div>
                    <div class="tab-pane " id="maintab3">
                        <h1>Patterns</h1>
                        <h3>Anriss zeigen</h3>
                        <div class="row">
                            <div class="col-md-6">
                                Um nur einen Anriss anzuzeigen kann eine Zeichenkette über die Funktion anriss() ausgegeben werden.
                                Standardmässig wird ein Text bei 70 Zeichen abgeschnitten. <br>
                                Der Anriss kann durch das Mitgeben einer Anrisslänge in beliebiger Grösse ausgegeben werden.
                            </div>
                            <div class="col-md-6">
                                <pre style="line-height:1">// Standard Anriss, 70 Zeichen
                                    <?php highlight_string('<?php echo anriss($text) ;?>');?>

// Custom Anriss, 30 Zeichen
                                    <?php highlight_string('<?php echo anriss($text, 30) ;?>');?></pre>

                            </div>
                        </div>



                        <h3>Elemente in einer Liste ausblenden</h3>
                        <div class="btn-group toggleSinglePrimary">
                            <button type="button" data-toggleclass="toggle" data-type="alle" class="toggletrigger btn btn-default btn-primary">Alle</button>
                            <button type="button" data-toggleclass="toggle" data-type="person" class="toggletrigger btn btn-default">Person</button>
                            <button type="button" data-toggleclass="toggle" data-type="firma" class="toggletrigger btn btn-default">Firma</button>
                        </div>
                        <br><br>
                        <ul class="list-group">
                        <?php foreach ($listeElemente as $key => $value): ?>

                            <li class="list-group-item toggle toggle-alle toggle-<?php echo $value['typ'] ;?>"><?php echo $value['name'] ;?></li>
                        <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ** End of TABS ** -->

        </div>

        <?php
        // JAVASCRIPT
        // This includes the needed javascript files
        // DO NOT REMOVE
        include(snippet("meta_javascripts"));?>

  </body>
</html>
