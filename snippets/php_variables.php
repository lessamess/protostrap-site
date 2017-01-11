
<table class="table table-condensed">
    <tr>
        <th>Name</th>
        <th>Description</th>
    </tr>
<?php foreach ($phpVariables as $key => $variable) {
    if($variable['description'] == ""){continue;}
    ?>
    <tr>
        <td>$<?php echo $key ;?></td>
        <td><?php echo $variable['description'] ;?>

        </td>
    </tr>

<?php } ?>
</table>