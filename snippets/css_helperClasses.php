<div class="row">
    <div class="col-md-8">

        <table class="table table-condensed">
            <tr>
                <th>Class</th>
                <th>What it does</th>
            </tr>
        <?php foreach ($cssClasses as $key => $class) {
            $effect = $class['markup'];
            if(isset($class['effect'])){
                $effect = $class['effect'];
            }

            ?>
            <tr>
                <td><b class="code"><?php echo $key ;?></b></td>
                <td style="max-width:600px">
                    <?php echo $class['title'] ;?>: <?php echo $class['description'] ;?><br>
                    <div class="micropadding"></div>
                    <?php echo $effect ;?><br>
                    <div class="block align-right">
                        <a href="javascript:void(0);" class="copyToClipboard" data-target="markup<?php echo $key ;?>">Copy Code</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <pre><code class="html" ><?php echo htmlentities($class['markup']) ;?></code></pre>
                    <div id="markup<?php echo $key ;?>" class="hide"><?php echo htmlentities($class['markup']) ;?></div>
                </td>
            </tr>

        <?php } ?>
        </table>
    </div>
</div>