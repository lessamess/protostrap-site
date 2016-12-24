Snippets are Protostrap's way to make specific parts of your project reusable, for example your project's header or footer. This reduces redundancy and the amount of work needed to change something that appears on several pages.
<br>
The way this is done is by saving the code of the snippet to a separate file into the directory <b>snippets</b>. <br><br>

The snippet can then be included into the page by using this function:<br><br>
<pre>
// This includes the contents of the file snippets/footer.php
&lt;?php include(snippet("footer"));?>
</pre>