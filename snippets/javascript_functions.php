
<table class="table table-condensed">
    <tr>
        <th>Function</th>
        <th>Description and Parameters</th>
        <th></th>
    </tr>
<?php foreach ($phpFunctions as $key => $function) { ?>
    <tr>
        <td><?php echo $key ;?></td>
        <td><?php echo $function['description'] ;?>
            <?php //echo $function['description'] ;?>

        </td>
    </tr>

<?php } ?>
</table>