<div class="row">
    <div class="col-md-8">
                        This is the default structure of Protostrap:
                        <div class="micropadding"></div>
                        <pre>
- assets
- core
- snippets
.htaccess
fileNotFound.php
functions_controller.php
index.php
google.php
testpage.php
</pre>

                            <br>
                            <strong>Assets folder</strong><br>
                            This folder contains all assets. Most importantly the CSS and JS files:<br>
                             - Add your CSS rules in the file assets/css/main.css<br>
                             - Add your JS code in the file assets/js/main.js<br><br>

                             The complete list of the folders in Assets:

 <table class="table table-condensed">
     <tr>
         <th>Folder</th>
         <th>Contains</th>
     </tr>
     <tr>
         <td>css</td>
         <td>All css files you add</td>
     </tr>
     <tr>
         <td>data</td>
         <td>All YAML files that contain the data of the Prototype. See the section Data Folder for a detailed documentation</td>
     </tr>
     <tr>
         <td>ico</td>
         <td>The icons that allow having a Homescreen Icon on mobile</td>
     </tr>
     <tr>
         <td>db</td>
         <td>A sqLite Database - For expert users only</td>
     </tr>
     <tr>
         <td>csv</td>
         <td>A folder to store your CSV files to be processed by Protostrap</td>
     </tr>
     <tr>
         <td>img</td>
         <td>All your images</td>
     </tr>
     <tr>
         <td>js</td>
         <td>All the JavaScript files you add</td>
     </tr>
     <tr>
         <td>webfonts</td>
         <td>All the webfonts Protostrap uses</td>
     </tr>
 </table>


                            <strong>Core folder</strong><br>
                            Contains all the essential Protostrap files. <b>Leave this folder alone</b>.<br><br>
                            <strong>Snippets Folder</strong> <br>
                            A place to store all your <a href="#snippets">snippets</a>. Contains a series of snippets to get you started. <br><br>
                            <strong>.htaccess</strong><br>
                            Handles "End of Prototype" situations when users click on links that have no corresponding page in the prototype. For this the module "mod_rewrite" has to be enabled on the server, which should be the case by default. If a file does not exists, Protostrap will show the file <a href="fileNotFound.php">fileNotFound.php</a> displaying the "End of Prototype" page.
                            <br><br>
                            <strong>index.php</strong><br>
                            The main file called when protostrap is opened.

                            <br><br>
                            <strong>fileNotFound.php</strong><br>
                            This file is called by .htaccess whenever a file is not found.
                            <br><br>
                            <strong>functions_controller.php</strong><br>
                            This file let's you add your own PHP functions. Adding them into functions_controller makes sure that you have the functions at you disposal in every page or snippet.
                            <br><br>
                            <strong>google.php</strong><br>
                            This is the file that contains a fake google search page that allows you to simulate google search scenarios.
                            <br><br>
                            <strong>testpage.php</strong><br>
                            This file contains examples of uses.
                            <br><br>
    </div>
    <div class="col-md-4">

    </div>
</div>