<?php
$names = get_spreadsheetData("https://docs.google.com/spreadsheets/d/1_WzhyY-_ZLZoKAaSvGv5UBKPBzuxtJwmZWgyL0JF-wU/edit?usp=sharing", "names");
 ?>
<div class="table-responsive table-responsive-maxheight">
    <table id="filtertable" class="simpleFilterTable table table-condensed table-striped table-hover draggable tablesorter">
        <thead>
            <tr>
                <th class="noWrap header">First Name</th>
                <th class="noWrap header">Family Name</th>
                <th class="noWrap header">Age</th>
            </tr>
            <tr>
                 <td><input type="text" class="simpleFilterSearch form-control"></td>
                 <td><input type="text" class="simpleFilterSearch form-control"></td>
                 <td><input type="text" class="simpleFilterSearch form-control"></td>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($names['data'] as $key => $name) {?>
            <tr class=" searchresults filterme ">
                <td class=""><?php echo $name['first_name'] ;?></td>
                <td class=""><?php echo $name['family_name'] ;?></td>
                <td class=""><?php echo $name['age'] ;?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>