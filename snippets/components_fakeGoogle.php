<div class="row">
    <div class="col-md-10">
        The scenario "user comes from Google" is probably one of the hardest things to test. You usually have to tell users that they have searched for something on Google and that they now are looking at a page from the search result. This feels extremely artificial.
        <br><br>
        Protostrap has a file google.php. When called it shows a page very similar to the Google start page. Users can perform searches and the results are real google search results.
        <br><br>
        <iframe src="google.php" style="width:100%; height:400px; border: 1 solid #ddd;"></iframe>
        <?php box("<b>Heads up!</b><br>Since google restricts the free searches over their API to 100 searches per day this search result page displays alwas the same result page.", "info", "inherit" , "boxid" , "" ); ?>
        <br>
        <b>Redirecting to the Prototype</b><br>
        The Google results really come from Google. Although: they are not requested through the users broser but through Protostrap itself. So the results pass though Protostrap before being shown to the user. <br><br>
        Just passing on the list to the users would not make much sense. After all you want to find out how the users react to the prototype. <br>
        Protostrap let's you define URLs that it will change to point to the prototype instead. <br><br>
        All the data needed is in the file <b>fakeGoogle.yml</b> in the folder assets/data.
        The file must contain your credentials to Google's custom search. If you haven't already you need to <a href="https://cse.google.com">sign up for Google Custom Search</a> to get the credentials.
        <br><br>
        Apart from the call parameters you can define the URLs that you want to replace and what they should be replaced with.
        <pre><code>google:
  callParameters:
    cx: "YOUR-CS-IDENTIFICATION"
    key: "YOUR-API-KEY"
    gl: "uk" #country code

  urlsToReplace:
    1: "http://www.example.com?ID=1234"
  replacements:
    1: "index.php"</code></pre>

    </div>
</div>