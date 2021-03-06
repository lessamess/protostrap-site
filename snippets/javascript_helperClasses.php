<br><br>
<table class="table table-condensed">
    <tr>
        <th>Class</th>
        <th>Description and attributes</th>
    </tr>
<?php foreach ($jsHelperClasses as $key => $helperClass) {
    if($helperClass['description'] == ""){continue;}
    ?>
    <tr>
        <td><a id="<?php echo $key ;?>"></a><b  class="code">.<?php echo $key ;?></b></td>
        <td><?php echo $helperClass['description'] ;?><br><div class="micropadding"></div>
            <div class="block align-right">
                <a href="javascript:void(0);" class="copyToClipboard" data-target="markup<?php echo $key ;?>">Copy Code</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <pre><code class="html"><?php echo $helperClass['markup'] ;?>
             </code></pre>
             <div id="markup<?php echo $key ;?>" class="hide"><?php echo $helperClass['markup'] ;?></div>
                <h4>Data attributes</h4>
            <?php

                if(isset($helperClass['attributes'] )){
                    foreach ($helperClass['attributes'] as $pkey => $attribute) {?>
                        <b class="code">data-<?php echo $pkey ;?></b> <?php if($attribute['type'] == "optional"){ echo "&nbsp;&nbsp;(optional)";} ?><br>
                        <blockquote>
                            <?php echo $attribute['description'] ;?>
                        </blockquote>
                    <?php }
                } else {
                    echo "None. <br><br>";
                }
            ?>
        </td>
    </tr>

<?php } ?>
</table>