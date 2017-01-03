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
                <td><?php echo $key ;?></td>
                <td style="max-width:600px">
                    <?php echo $class['title'] ;?>: <?php echo $class['description'] ;?><br>
                    <div class="micropadding"></div>
                    Markup:
                        <br><pre><code class="html"><?php echo htmlentities($class['markup']) ;?></code></pre>
                    <br>
                    Effect: <br>
                    <?php echo $effect ;?>
                </td>
            </tr>

        <?php } ?>
        </table>
    </div>
</div>