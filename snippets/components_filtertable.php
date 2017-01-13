<?php
$names = get_spreadsheetData("https://docs.google.com/spreadsheets/d/1_WzhyY-_ZLZoKAaSvGv5UBKPBzuxtJwmZWgyL0JF-wU/edit?usp=sharing", "names");
?>
<div class="table-responsive table-responsive-maxheight">
  <table class="filterTable table table-condensed table-striped table-hover draggable tablesorter">
    <thead>
      <tr>
        <th class="noWrap header">First Name</th>
        <th class="noWrap header">Family Name</th>
        <th class="noWrap header">Age</th>
      </tr>
      <tr>
        <td><input type="text" class="filterSearch form-control"></td>
        <td><input type="text" class="filterSearch form-control"></td>
        <td><input type="text" class="filterSearch form-control"></td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($names['data'] as $key => $name) {?>
      <tr class=" filterme ">
        <td class=""><?php echo $name['first_name'] ;?></td>
        <td class=""><?php echo $name['family_name'] ;?></td>
        <td class=""><?php echo $name['age'] ;?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<div class="block align-right">
  <a href="javascript:void(0);" class="copyToClipboard" data-target="filtertable">Copy Code</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<pre><code>&lt;table class="table filterTable tablesorter">
            &lt;thead>
                &lt;tr>
                    &lt;th class="noWrap header">First Name&lt;/th>
                    &lt;th class="noWrap header">Family Name&lt;/th>
                    &lt;th class="noWrap header">Age&lt;/th>
                &lt;/tr>
                &lt;tr>
                     &lt;td>&lt;input type="text" class="filterSearch form-control" >&lt;/td>
                     &lt;td>&lt;input type="text" class="filterSearch form-control" >&lt;/td>
                     &lt;td>&lt;input type="text" class="filterSearch form-control" >&lt;/td>
                &lt;/tr>
            &lt;/thead>
            &lt;tbody>
                &lt;tr class="filterme ">
                    &lt;td class="">Anna&lt;/td>
                    &lt;td class="">Alpha&lt;/td>
                    &lt;td class="">55&lt;/td>
                &lt;/tr>
                &lt;tr class="filterme ">
                    ...
                &lt;/tr>
            &lt;/tbody>
        &lt;/table>
</code></pre>
<div id="filtertable" class="hide">&lt;table class="table filterTable tablesorter">
  &lt;thead>
  &lt;tr>
  &lt;th class="noWrap header">First Name&lt;/th>
  &lt;th class="noWrap header">Family Name&lt;/th>
  &lt;th class="noWrap header">Age&lt;/th>
  &lt;/tr>
  &lt;tr>
  &lt;td>&lt;input type="text" class="filterSearch form-control" >&lt;/td>
  &lt;td>&lt;input type="text" class="filterSearch form-control" >&lt;/td>
  &lt;td>&lt;input type="text" class="filterSearch form-control" >&lt;/td>
  &lt;/tr>
  &lt;/thead>
  &lt;tbody>
  &lt;tr class="filterme ">
  &lt;td class="">Anna&lt;/td>
  &lt;td class="">Alpha&lt;/td>
  &lt;td class="">55&lt;/td>
  &lt;/tr>
  &lt;tr class="filterme ">
  ...
  &lt;/tr>
  &lt;/tbody>
&lt;/table></div>
<br>
<div class="row">
  <div class="col-md-5">
    To filter:
    <ul class="simpleList">
      <li>Add the class <b>filterTable</b> to the &lt;table> tag.</li>
      <li>Add the class <b>filterSearch</b> to the input field(s). This / these <b>have to be in the table</b>.</li>
      <li>Add the class <b>filterme</b> to the rows you want filtered</li>
    </ul>
  </div>
  <div class="col-md-5">
    To sort:
    <ul class="simpleList">
      <li>Add the class <b>tablesorter</b> to the &lt;table> tag.</li>
    </ul>
  </div>
</div>