<?php

/** --- B A S E F U N C T I O N S ---
    This file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "one";
$names = get_spreadsheetData("https://docs.google.com/spreadsheets/d/1_WzhyY-_ZLZoKAaSvGv5UBKPBzuxtJwmZWgyL0JF-wU/edit?usp=sharing", "names");


?><!DOCTYPE html>
<html >
    <head>
        <title><?php echo $application . " - " . $brand ;?></title>
        <?php
        // this includes all the markup that loads css files and similar stuff,
        // if you have to add more css, that's the place to do it.
        // DO NOT REMOVE
        include(snippet("meta_headTag"));?>

    </head>
    <style>

    </style>
<?php

// uncomment the following function to force user to be logged in
// forceLogin(); ?>

    <body class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <a href="index.php"><i class="fa fa-long-arrow-left"></i> Back to site</a>

                    <h3>Testpage</h3>

                    <h4>Icons</h4>
                    Fontawesome:
                    <div><i class="fa fa-percent"></i> Percent &nbsp;&nbsp;<i class="fa fa-hashtag"></i> Hashtag</div>
                    <br>
                    Ionicons:
                    <div><i class="icon ion-ios-star-outline"></i> Star empty &nbsp;&nbsp;<i class="icon ion-ios-bolt-outline"></i> Bolt outline</div>
                    <br>

                    <h4>Typeahead</h4>
                    <span class="form">
                        <!-- Typeahead
                             Change Data in snippets/typeahead.php
                             Documentation: https://github.com/bassjobsen/Bootstrap-3-Typeahead -->
                        <input type="text" class="form-control typeahead" placeholder="Typeahead (Try: foo)">
                    </span>
                    <br>

                    <br><br><br><br><br><br><br>
                    <h4>Select</h4>
                    <select class="selectpicker" data-live-search="true" name="select" data-count-selected-text="{0} selected" data-icon-base="fa" data-tick-icon ="fa fa-check" data-width="auto" multiple data-selected-text-format="count > 2" title="Select one or more">
                        <option value="">one</option>
                        <option value="">two</option>
                        <option value="">three</option>
                        <option value="">four</option>
                        <option value="">five</option>
                        <option value="">six</option>
                        <option value="">seven</option>
                        <option value="">eight</option>
                    </select>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>


                    <br>
                    <h4>Datepicker</h4>
                    <div class="input-group date" id="datepicker" data-date="">
                        <input class="form-control" type="text" value="">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                    <br><br><br><br><br><br><br>


                    <h4>Fileupload</h4>
                    <form name="fileupload" action="profil.php" method="POST"  enctype="multipart/form-data">
                        <input name="image" type="file" capture="camera" accept="image/*" title="Select Image" data-filename-placement="inside">
                    </form>
                    <br><br><br><br><br><br><br><br>

                    <h4>Masked Input</h4>
                        Social Security Number <br>
                        <input id="socialsecurity" name="social" type="text" placeholder="00-00-0000">
                    <br>
<<<<<<< 92d306a7c755a0acf24122f8ab0f510a29ea898e
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
=======
                    <br>
                    <h4>Toggle One Button in a group</h4>

                    <div class="btn-group toggleSinglePrimary">
                        <button type="button" class="btn btn-default btn-primary">Left</button>
                        <button type="button" class="btn btn-default">Middle</button>
                        <button type="button" class="btn btn-default">Right</button>
                    </div>
>>>>>>> update testpage mit mobile template

                    <br><br>
                    <h4>Switch</h4>
                    <!-- http://www.bootstrap-switch.org -->
                    <input type="checkbox" class="switch" checked> &nbsp;&nbsp;
                    <input type="checkbox" class="switch" data-on-text="Live" data-off-text="Offline" data-on-color="danger" checked>
                    <br>
                    <br>
                    <h4>Password toggle</h4>
                    <div class="input-group">
                              <input type="password" class="form-control" name="" placeholder="Password">
                              <span class="input-group-addon passwordToggle"><i class="fa fa-square-o"></i> Show</span>
                    </div>

                    <br>
                    <br>
                    <h4>Collapse</h4>

                    <div id="" class="collapse in collapse<?php echo getUniqueId();?>">

                     <a href="javascript:void(0);" class="btn btn-default" data-toggle="collapse" data-target=".collapse<?php echo $lastUniqueId;?>">Open</a>
                    </div>

                    <div id="" class="collapse collapse<?php echo $lastUniqueId;?>">
                     Opened content <br><br>
                     <a href="javascript:void(0);" class="btn btn-default" data-toggle="collapse" data-target=".collapse<?php echo $lastUniqueId;?>">Close</a>
                    </div>

                </div>

            </div>

            <br>
            <h4>Cards, same height, flexbox, responsive</h4>
            <div class="row flex-row ">
                <?php
                $i = 1;
                while ($i <= 4) {?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="btn btn-default btn-togglePrimary btn-circle-sm btn-onCard"><i class="fa fa-heart-o"></i></div>
                            <img class="card-img-top" src="assets/img/placeholderImage.svg" class="img-responsive" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">A description of your card's content.
                                <?php if($i == 3){
                                    echo "<br>With more and more content";
                                    } ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $i++;
                } ?>
            </div>

            <br><br>

            <div class="row">
                <div class="col-md-6">
                    <h4>Sortable List</h4>
                    <ul class="list-group sortable list">
                        <li class="list-group-item">1</li>
                        <li class="list-group-item">2</li>
                        <li class="list-group-item">3</li>
                        <li class="list-group-item">4</li>
                        <li class="list-group-item">5</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Sortable Grid</h4>
                    <ul class="list-group sortable grid">
                        <li class="">1</li>
                        <li class="">2</li>
                        <li class="">3</li>
                        <li class="">4</li>
                        <li class="">5</li>
                    </ul>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <h4>Translations</h4>
                    Key: thisIsAtest <br>

                    En: <?php echo __("thisIsAtest","en"); ?> <br>
                    De: <?php echo __("thisIsAtest","de"); ?> <br>
                    Fr: <?php echo __("thisIsAtest","fr"); ?> (Not available) <br>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <a name="login"></a>
                    <?php include(snippet("loginForm"));?>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-6">
                    <a class="" data-toggle="collapse" data-target="#collapse<?php echo getUniqueId();?>">Show Deeplink</a>
                    <div id="collapse<?php echo $lastUniqueId;?>" class="collapse">
                        <input type="text" class="form-control selectOnClick" name="" placeholder="" value="<?php echo getDeeplink(); ;?>">
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="row">
                <div class="col-md-3">
                    <h4>Change Data</h4>
                    Favorite Color: <span id="favColor"><?php echo $favoriteColor ;?></span><br>
                    <input type="text" class="form-control" id="favoriteColorChange" value="" placeholder="Change Color" >
                    <span class="hide" id="reloadInfo"><i class="fa fa-info"></i> Reload to see that the value changed permanently</span>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <h4>Filtertable and Table Sorter</h4>
                        <?php
                        $tabledata = $names;
                        include(snippet("makeTableFromData"));?>
                    <div class="table-responsive table-responsive-maxheight">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h4>Stepper</h4>
                    <div class="stepper">
                        <ul class="steps">
                            <li id="step-tab-1" data-target="#step1" class="active"><span id="badge1" class="label label-as-badge label-info">1</span> Step 1<span class="chevron"></span></li>
                            <li id="step-tab-2" data-target="#step2"><span id="badge2" class="label label-default label-as-badge">2</span> Step 2<span class="chevron"></span></li>
                            <li id="step-tab-3" data-target="#step3"><span id="badge3" class="label label-default label-as-badge">3</span> Step 3<span class="chevron"></span></li>
                            <li id="step-tab-4" data-target="#step4"><span id="badge4" class="label label-default label-as-badge">4</span> Step 4<span class="chevron"></span></li>
                        </ul>
                        <div class="step-content">
                            <div class="step-pane step-pane-1 active" id="step1">

                                <a class="btn btn-primary btn-next" data-nextid="2" type="button" href="javascript:void(0);">Next</a>

                            </div>
                            <div class="step-pane step-pane-2 " id="step2">
                                <a class="btn btn-default btn-prev " data-previd="1" type="button" href="javascript:void(0);">Previous</a>
                                <a class="btn btn-primary btn-next" data-nextid="3" type="button" href="javascript:void(0);">Next</a>


                            </div>
                            <div class="step-pane step-pane-3 " id="step3">
                                <a class="btn btn-default btn-prev " data-previd="2" type="button" href="javascript:void(0);">Previous</a>
                                <a class="btn btn-primary btn-next" data-nextid="4" type="button" href="javascript:void(0);">Next</a>
                            </div>
                            <div class="step-pane step-pane-4 " id="step4">
                                <a class="btn btn-default btn-prev " data-previd="3" type="button" href="javascript:void(0);">Previous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h4>Mobile Template</h4>
                    <iframe width="320" height="480" src="template_mobile.php"></iframe>

                </div>
            </div>
            <br>
        </div> <!-- /container -->

        <?php
        // JAVASCRIPT
        // This includes the needed javascript files
        // DO NOT REMOVE
        include(snippet("meta_javascripts"));?>
        <script>
        $(function(){
            $("#favoriteColorChange").change(function() {
                $("#favColor").html($(this).val());
                updateSessionVar("set","favoriteColor",$(this).val());
                $(this).val("");
                $("#reloadInfo").removeClass("hide");
            });

        })


        </script>
  </body>
</html>
