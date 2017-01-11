<div class="row">
    <div class="col-md-10">
        The scenario "user comes from Google" is probably one of the hardest things to test. You usually have to tell users that they have searched for something on Google and that they now are looking at a page from the search result. This feels extremely artificial.
        <br><br>
        Protostrap has a file google.php. When called it shows a page very similar to the Google start page. Users can perform searches and the results are real google search results.
        <br><br>
        <iframe src="google.php" style="width:100%; height:400px; border: 1 solid #ddd;"></iframe>
        <?php box("<b>Heads up!</b><br>Google restricts the free searches over their Custom Search API to 100 searches per day. Therefore the search result page above displays alwas the same static result page.", "info", "inherit" , "boxid" , "" ); ?>
        <br>
        <b>Redirecting to the Prototype</b><br>
        The Google results really come from Google. Although: they are not requested through the users browser but through Protostrap itself. So the results pass though Protostrap before being shown to the user. <br><br>
        Just passing on the list to the users would not make much sense. After all you want to find out how the users react to the prototype. <br>
        Protostrap let's you define URLs that it will change to point to the prototype instead. <br><br>
        All the data needed is in the file <b>fakeGoogle.yml</b> in the folder assets/data.
        The file must contain your credentials to Google's custom search. If you haven't already you need to <a href="https://cse.google.com">sign up for Google Custom Search</a> to get the credentials.
        <br><br>
        Besides the call parameters you have to define the URLs that you want to replace and what they should be replaced with. <br><br>
        <pre><code>google:
  callParameters:
    cx: "YOUR-CS-IDENTIFICATION"
    key: "YOUR-API-KEY"
    gl: "uk" #country code

  urlsToReplace:
    1: "http://www.example.com"
  replacements:
    1: "index.php"</code></pre>

    Protstrap will match any links that contain the urls specified, even if the links themselves are longer. <br>
    In the example above Protostrap would also replace the link http://www.example.com/category/ since the url to replace is contained in the link.

    </div>
</div>