Protostrap lets you have data sets in a very simple text file. <br>
The fomrat of the file is called YAML and the idea is to structure data by indetation. Here's a simple example:
                <br><br>
                <div class="row">
                    <span class="col-md-6">
                        <pre>
application: Protostrap
movie: "2001: A Space Odyssey"

fluids:
  1:
    name: Water
    color: transparent
  2:
    name: Wine
    color: red
</pre>

                    </span>
                    <span class="col-md-6">
                        <ul>
                            <li class="">Each indentation must be <strong>exactly 2 spaces</strong>. <br><br></li>
                            <li>Use quotation marks for more complex strings, especially if they contain colons.</li>
                        </ul>
                    </span>
                </div>
                <br>
                Each data set will be exposed as a PHP-variable and is available at any time in Protostrap.
                To print the variables you would use:<br><br>
                <pre>
// For simple variables
&lt;?php echo $application; ?>

// For single elements in an array
&lt;?php echo  $fluids[1]['name']; ?>

// To go through all elements in an array
// This code will print
// Water: transparent
// Wine: red
&lt;?php foreach($fluids as $key => $fluid){
    echo  $fluid['name'] . ": " . $fluid['color'] ;
}?>
</pre>
                <br>
                <h3>The data Directory</h3>
                        There is a file <strong>data.yml</strong> in the directory <strong>assets/data</strong>. You can add your data to that file or add any other file to that directory - any file in there will be used, as long as it has the correct indetation. <br><br>Note: Any data set that appears multiple times will overwrite its preceding twin.
