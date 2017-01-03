<?php $blank = file_get_contents("./snippets/blank.txt"); ?>
<div class="row">
    <div class="col-md-8">
        Pages that get called in the browser have to have a certain structure in order to work. There are only a few rules but these are important:
        <ul class="simpleList">
            <li>The first thing must be to include protostrap.php</li>
            <li>Including meta_headTag.php loads all the CSS etc. Without it il will not look like anything.</li>
            <li>Including meta_javascripts.php loads all the javascript libraries. Without it nothing will be interactive.</li>
        </ul>

        This below is the minimal filestructure that Protostrap requires.
        <div class="micropadding"></div>
    </div>
    <div class="col-md-4">


    </div>
</div>
<pre><code class="html"><?php echo htmlentities($blank) ;?></code>
</pre>