<br><br>
<table class="table table-condensed">
    <tr>
        <th>Function</th>
        <th>Description and Parameters</th>
    </tr>
<?php foreach ($jsFunctions as $key => $function) {
    if($function['description'] == ""){continue;}
    ?>
    <tr>
        <td><b class="code"><?php echo $key ;?></b></td>
        <td><?php echo $function['description'] ;?><br><div class="micropadding"></div>
            <pre><code class="php"><?php
                $syntax = $key."(";
                if(isset($function['parameters'] )){
                    $comma = "";
                    foreach ($function['parameters'] as $pkey => $parameter) {
                        if($parameter['type'] == "optional"){ continue;}
                        $optBracketOpen = "";
                        $optBracketClose = "";
                        if($parameter['type'] == "optional"){
                            $optBracketOpen = "[";
                            $optBracketClose = "]";
                        }
                        $syntax .= $optBracketOpen.$comma.$pkey.$optBracketClose;
                        $comma = ", ";
                    }
                }
                $syntaxForOpts = $syntax.$comma;
                $syntax .= ");";
                echo $syntax;
             ?></code></pre>
                <h4>Parameters</h4>
            <?php

                if(isset($function['parameters'] )){
                    foreach ($function['parameters'] as $pkey => $parameter) {?>
                        <b class="code"><?php echo $pkey ;?></b> <?php if($parameter['type'] == "optional"){ echo "&nbsp;&nbsp;(optional)";} ?><br>
                        <blockquote>
                            <?php echo $parameter['description'] ;
                                if($parameter['type'] == "optional"){
                            ?>
                            <pre><code class="php"><?php echo $syntaxForOpts."$".$pkey.");" ;?></code></pre>
                            <?php } ?>
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