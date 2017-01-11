<div class="row">
    <div class="col-md-8">
        <br>
        The <b>assets/data</b> folds a series of files with the ending <b>.yml</b> that are called YAML files. <br>
        <div class="micropadding"></div>
        <table class="table table-condensed">
            <tr>
                <th>File</th>
                <th>Contains</th>
            </tr>
            <tr>
                <td>data.yml</td>
                <td>This is the main data file. You can enter your data here, Protstrap will expose every entry as a variable.</td>
            </tr>
            <tr>
                <td>dataFromSpreadsheets.yml</td>
                <td>Protostrap let's you generate YAML files from Google spreadsheets and writes the YAML into this file. This is great if you want to keep your prototype working offline.</td>
            </tr>
            <tr>
                <td>fakeGoogle.yml</td>
                <td>All the credentials, links and substitutions to get the <a href="components.php#fakeGoogle">fake Google component</a> to work</td>
            </tr>
            <tr>
                <td>linkedData.yml</td>
                <td>The links to the spreadsheets you want to include. Protostrap will request the data from Google and save it into the user session. The data is reloaded each time you renew the session.</td>
            </tr>
            <tr>
                <td>translations.yml</td>
                <td>The basic file structure for having multilingual support in your prototype</td>
            </tr>
            <tr>
                <td>users.yml</td>
                <td>Users and roles to allow a rolebased experience.</td>
            </tr>
        </table>

        <br><br>
        <h4>How YAML files work</h4>

        The advantage of YAML files is that they are simple textfiles. <br>
        The data and its structure are easy to recognize.
        <br><div class="micropadding"></div>
    </div>
    <div class="col-md-4">

    </div>
</div>


<div class="row">
    <div class="col-md-10">
    <pre><code class="javascript">brand: "My Brand"
favoriteColor: "Red"

news:
  1:
    title: "Log lady spotted without log"
    img: "logLady.png"
    date: "<?php echo makeDateFromString("yesterday") ;?>"
  2:
    title: "The owls are not what they seem"
    img: "owls.png"
    date: ['parse','makeDateFromString', '-5 days']
</code></pre>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        All entries in a YAML file get transformed into variables that you can use in the PHP files. <br>
        Each key that is not indented is a variable. In the example above you would get 3 variables:
        brand, favoriteColor and news. <br><br>
        News is not only a variable, it is an array. The levels of an array are done by indenting each level by exactly 2 spaces. <br>
        The news array
        <ul class="simpleList">
            <li>has 2 news</li>
            <li>each news has values for title, img and date.</li>
        </ul>

        <a id="dynamic"></a>
        <h4 class="sub">Dynamic values</h4>
        You may have noticed that the two date values in the example above differ: <br><div class="micropadding"></div>
        <pre><code class="javascript">    date: "<?php echo makeDateFromString("yesterday") ;?>"
...
    date: ['parse','makeDateFromString', '-5 days']
</code></pre>
        The first value is a hardcoded value. That news in your Prototype will allways be dated with the date <?php echo makeDateFromString("yesterday") ;?>. <br>
        The second value is a dynamic value. That news will always show the date of five days ago, no matter when you'll open the prototype. <br><br>
        The definition in the brackets tells Protostrap that it is a value that has to be parsed with the function <b>makeStringFromData</b> and that the value to parse is <b>-5 days</b>
        <br><br>
        This functionality is essential when you have prototypes that rely on dates. Imagine a prototype for an auctioning platform. The endtime of the auctions should always be within the next 7 days. In  static Prototype you would have to adjust dates each time you have a round of tests - or you'l run the risk of confsing your users with auctions that end in the past.
        <br><br>
        The functionality is not limited to dates. you can add any PHP-function you want as long as it exists in the file function_controller.php

        <a id="callingVariables"></a>
        <h4 class="sub" >Calling the variables in PHP</h4>
        You can use the variables from the YAML files the same way you would use any PHP variable
        <pre><code>&lt;!-- string variables -->
&lt;?php echo $brand ;?>

&lt;!-- Arrays -->
&lt;?php foreach ($news as $key => $item):
          echo $item['titel'];
      endforeach ?></code></pre>

    </div>
</div>



