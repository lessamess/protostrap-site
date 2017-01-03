<table class="table table-condensed">
    <tr>
        <th>Class</th>
        <th>What it does</th>
        <th></th>
    </tr>
<?php foreach ($cssClasses as $key => $class) {
    $effect = $class['markup'];
    if(isset($class['effect'])){
        $effect = $class['effect'];
    }

    ?>
    <tr>
        <td><?php echo $key ;?></td>
        <td>
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