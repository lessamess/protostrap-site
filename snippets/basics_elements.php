<div class="row">
    <div class="col-md-8">
        Protostrap is not a single tool but more a collection of tools that Ptotostrap ties together and extends.
        <br><br>
        It's composed of:
        <ul class="simpleList">
            <li>
                <b>Bootstrap</b><br>
                Protostrap is based on <a href="http://getbootstrap.com">Twitter Bootstrap</a>. This means that in Protostrap you can do everything you can do in Bootstrap.
            </li>
            <li>
                <b>Font Awesome & Ionicons</b><br>
                <a href="http://fontawesome.io/">Font Awesome</a> is the go-to icon font and it comes with Protostrap by default. <br>
                All Font Awesome icons can be called with the default Font Awesome tag:
                <div class="micropadding"></div>
                <pre><code class="html">&lt;i class="fa fa-search">&lt;/i> <br><div class="micropadding"></div>This shows: <i class="fa fa-search"></i></code></pre>
                <br>
                For more mobile-focused Prototypes we also added the <a href="http://ionicons.com/">Ionicons</a> icon font.
                The syntax is slightly different and the icons are larger by default.
                <div class="micropadding"></div>
                <pre><code class="html">&lt;i class="icon ion-ios-star-outline">&lt;/i> <br><div class="micropadding"></div>This shows: <i class="icon ion-ios-star-outline"></i></code></pre>
                <br>
            </li>
            <li>
                <b>3rd Party Extentions</b><br>
                Protostrap comes with a series of 3rd party extentions to enable features not native to Bootstrap:
                <table class="table table-condensed">
                    <tr>
                        <th>Name</th>
                        <th>Enabled By Default</th>
                        <th></th>
                    </tr>
                <?php
                $skip = array ("extendBootstrapGrid","fontawesome", "ionicons");
                foreach ($config['assets'] as $key => $val) {
                    if(in_array($key, $skip)){
                        continue;
                    }
                    ?>
                    <tr>
                        <td><?php echo $val['title'] ;?></td>
                        <td><?php if($val['load'] == 1){echo "yes";} else {echo "no";} ?></td>
                        <td><a href="testpage.php#<?php echo $key ;?>">Demo</a>&nbsp;&nbsp;<a href="javascript:void(0);">Website</a></td>
                    </tr>
                <?php } ?>
                </table>
            </li>
            <li>
                <b>Protostrap Functions & Helper Classes</b><br>
                Protostrap adds a lot of functionality in PHP and JavaScript and like Bootstrap has a range of CSS classes that are handy helpers to make things easier or more interactive.
                <br><br>
                See the pages for <a href="css.php">CSS</a>, <a href="javascript.php">JavaScript</a> and <a href="php.php">PHP</a> for a detailed documentation.
            </li>
            <li>
                <b>Protostrap Components</b><br>
                Protostrap has a few components of its own. These allow more advanced functionalities and are what makes Protostrap stand out. <br>
                These are:
                <ul class="simpleList">
                    <li>A simple Data Layer</li>
                    <li>Fake Authentication Layer</li>
                    <li>Multilinguality</li>
                    <li>Fake Google: Simulate Google Searches</li>
                </ul>
                See <a href="components.php">the components page</a> for more details.
            </li>
        </ul>
    </div>
    <div class="col-md-4">

    </div>
</div>