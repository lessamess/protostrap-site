<div class="row">
    <div class="col-md-8">
        Google spreadsheets have proven to be a very convenient way to get data into prototypes, especially large amounts of data. Google spreadsheets are simple to use and can also be shared with customers to make them add data they would like to seee in the prototype.

        <a id="structure"></a>
        <h4 class="sub">The structure of the spreadsheets</h4>
        The spreadsheets' structure has to follow these simple rules:
        <ul class="simpleList">
             <li>The first row containes the names of the columns. These names are turned into keys for the array. <br>
                Make sure the first row is not empty. You might also want to freeze the first row in the spreadsheet through <b>View</b> > <b>Freeze</b> > <b>1 row</b>
            </li>
            <li>Make sure the column names are unique.</li>
            <li>The cells must contain only plain data. No functions or similar</li>
            <li>Do not have completely empty columns (columns with a name but no data are fine) </li>
            <li>Do not format the cells. You can if you want, but no formatting will be taken over by Protostrap</li>
         </ul>
         <img class="img-responsive img-thumbnail" src="assets/img/spreadsheet.png" alt="">
        <a id="spreadsheetInPhp"></a>
        <h4 class="sub">The spreadsheets' data in PHP</h4>
        To import the data you have to tell Protostrap the url of the spreadsheet and what variable it should be assigned to.
        <br>
        This can be done by adding links to the file <b>linkedData.yml</b> in assets/data.
    </div>
</div>
<pre><code class="javascript">linkedData:
  names: "https://docs.google.com/spreadsheets/.../edit?usp=sharing"</code></pre>
<div class="row">
    <div class="col-md-8">
        Protostrap will load the spreasheet's data into the user session each time the session is started. <br><br>
        Each file listed in linkedData.yml will be attributed to the variable with the given key. In our example this would be <b>names</b>
        <br><br>
        Protostrap will load the data into a variable that is more than just the array of the data. <br>
        The array contains two parts. <b>fields</b> has all the information of the column names and <b>data</b> the actual data of the spreadsheet
        <br><div class="micropadding"></div>
        <pre><code class="javascript">names:
  fields:
    keys:
      0: "first_name"
      1: "family_name"
      2: "age"
    labels:
      0: "First Name"
      1: "Family Name"
      2: "Age"
  data:
    0:
      first_name: 'Anna'
      family_name: 'Zulu'
      age: '55'
    1:
      first_name: 'Bruno'
      family_name: 'Alpha'
      age: '38'</code></pre>

The point of this structure is to have a way to display all of the spreadsheet's data in a table, including the table header, while at the same time making sure that the generated keys of the field are proper PHP keys. <br>
<br>
Protostrap takes the column names and normalizes them: the are lowercased and all special characters including spaces are replaced by underscores.
<br><br>
The variable generated can be used like any other variable in PHP.
<br><div class="micropadding"></div>
<pre><code class="php">// this would print out the age
// of the first entry
echo $names['data'][0]['age'];

// this would go through the array of data
// and print the first name of each entry
foreach ($names['data'] as $key => $name):
    echo $name['first_name']. "&lt;br>";
endforeach</code></pre>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <a id="dynamicSpreadsheet"></a>
        <h4 class="sub">Dynamic values in spreadsheets</h4>
        As with textfiles you can have dynamic values in spreadsheets too. There is one differences though: Dynamic values in spreadsheets are per column and not per value
        To get dynamic values working the name of your column has to have a specific structure:
        <br><br>
        <img class="img-responsive img-thumbnail" src="assets/img/dynamicColumn.png" alt="">
        <!-- <pre>Last login_parse_makeDateFromString</pre> -->
        <br><br>
        After your column label (Last login) you have to add _parse_ followed by the name of the function. <br>
        <br>Column name:<br>
        Last login_parse_makeDateFromString <br><br>
        These rules apply:
        <ul class="simpleList">
            <li>No spaces after _parse_</li>
            <li>No underscores exept for _parse_</li>
            <li>The function must exist, otherwise Protostrap will return a value like this:<br>
            <pre>today >> not parsed: missing function makeDateFromString</pre></li>
            <li>The label in the array will be everything before _parse_. <br>In this case <b>Last login</b></li>
            <li>The key in the data-array will be the normalized version of the label. In this case <b>last_login</b></li>
        </ul>
    </div>
    <div class="col-md-4">

    </div>
</div>

