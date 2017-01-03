<div class="row">
    <div class="col-md-8">
        <a href="https://www.sublimetext.com/">Sublime Text</a> is an awesome text editor well worth the money it costs. <br>
        It has ridiculously great features like <a href="http://docs.sublimetext.info/en/latest/editing/editing.html#multiple-selections">multiple selection</a> or the ability to move lines up or down in a document (great for reorganizing lists!) <br><br>
        The best thing about Sublime Text though is how extensible it is. <br>
        There are two types of extentions we recommend for working with Protostrap:
        <ul class="simpleList">
            <li>Packages that help you with writing code in general</li>
            <li>Snippets that are customized to Protostrap</li>
        </ul>

        <div id="packages">
            <h4 class="sub">Recommended Sublime Packages</h4>
            There are a few Packages that we strongly recommend you to use in order to write code quickly and with as few errors as possible. <br>
            These are:
            <ul class="simpleList">
                <li><b>Emmet</b><br>Emmet's superpower is in expanding abbreviations of HTML/CSS terms. <br>
                    <br>
                    <div class="flexbox">
                        <div class="flex-1" >
                            For example the abbreviation

                        </div>
                        <div class="flex-1" >
                            <pre><code class="html">div.page</code></pre>
                        </div>
                    </div>
                    <div class="flexbox">
                        <div class="flex-1" >
                            expands to this <br>on hitting the tab key:

                        </div>
                        <div  class="flex-1" >
                            <pre><code class="html">&lt;div class="page"&gt;&lt;/div&gt;</code></pre></div>
                    </div>





                </li>
                <li><b>Text Pastry</b> <br>Text Pastry expands Sublime's great multiselect feature even further. It let's you insert different items for each selection, be it words or numbers. <br>
                    <br>
                    In the example below we multiple-select li-tags for a navigation and insert all navigation keywords at once.
                    <div class="micropadding"></div>
                    <img class="img-responsive" src="assets/img/textPastry.gif" alt="">

                </li>
            </ul>


            <br><br>
            To add Packages to Sublime Text you first have to <a href="https://packagecontrol.io/installation">install Package Control</a>, which is a package manager to... manage packets. <br>
            With Package Control installed you hit Shift+Cmd+P, enter "Package Control" and Select "Install Package". This will present you a live-search like interface where you can look for the extentions.

        </div>
        <div id="pssnippets">
            <h4 class="sub" >Protostrap snippets</h4>
            Sublime Text let's you define snippets that can be called with shortcuts. These snippets are small pieces of code that save you a lot of typing and reduce the number of errors you make. <br><br>
            There are quite a few snippets available and you can even <a href="http://docs.sublimetext.info/en/latest/extensibility/snippets.html">make your own</a>.
            The snippets come with every Protostrap installation, you just have to move them to the folder that Sublime scans for snippets.
            <ul class="simpleList">
                <li>Go to your Protostrap installation</li>
                <li>Open the addons folder</li>
                <li>Rename the sublime folder to Protostrap</li>
                <li>Move the renamed folder into Sublime Text's data directory. <br>The data directory is a platform-dependent location: <br>
                    &nbsp;&nbsp;-&nbsp;Windows: %APPDATA%\Sublime Text 3 <br>
                    &nbsp;&nbsp;-&nbsp;OS X: ~/Library/Application Support/Sublime Text 3
                </li>
            </ul>
            You now have the snippets at your disposal: <br>
            Open any php file in sublime, enter <b>testsnippet</b> and hit the tab key. <br>
            You should now see this text: <br><b>This is the test snippet. If you can see this it worked!</b>
            <br><br>
            <?php box("<b>Heads up!</b><br>Make sure to check out or <b><a href=\"cheatsheet.php\">Cheatsheet</a></b> for an easy start with snippets.", "info", "inherit" , "boxid" , "dismiss" ); ?>

        </div>
        <div id="keybindings">
            <h4 class="sub">Key bindings for Protostrap snippets</h4>

            To make things even faster we have a series of Key Bindings you can add to your Sublime configuration. <br>
            Add the Key Bindings:
            <ul class="simpleList">
                <li>Copy the following Binding Codes: <br>
                    <div class="micropadding"></div>
                    <textarea name="" id="" class="form-control selectOnFocus" rows="5">{ "keys": ["ctrl+b"], "command": "insert_snippet", "args": {"name": "Packages/Protostrap/btn.sublime-snippet"} },
{ "keys": ["ctrl+shift+<"], "command": "insert_snippet", "args": {"name": "Packages/Protostrap/php.sublime-snippet"} },
{ "keys": ["ctrl+e"], "command": "insert_snippet", "args": {"name": "Packages/Protostrap/phpEcho.sublime-snippet"} },
{ "keys": ["ctrl+f"], "command": "insert_snippet", "args": {"name": "Packages/Protostrap/foreach.sublime-snippet"} },
{ "keys": ["ctrl+c"], "command": "insert_snippet", "args": {"name": "Packages/Protostrap/jQclick.sublime-snippet"} },
{ "keys": ["ctrl+shift+c"], "command": "insert_snippet", "args": {"name": "Packages/Protostrap/collapse.sublime-snippet"} },
{ "keys": ["ctrl+v"], "command": "insert_snippet", "args": {"name": "Packages/Protostrap/vardump.sublime-snippet"} },
{ "keys": ["ctrl+i"], "command": "insert_snippet", "args": {"name": "Packages/Protostrap/icon.sublime-snippet"} },
{ "keys": ["ctrl+shift+t"], "command": "insert_snippet", "args": {"name": "Packages/Protostrap/tabs.sublime-snippet"} },
{ "keys": ["ctrl+t"], "command": "insert_snippet", "args": {"name": "Packages/Protostrap/table.sublime-snippet"} },
{ "keys": ["ctrl+r"], "command": "insert_snippet", "args": {"name": "Packages/Protostrap/row.sublime-snippet"} },
                    </textarea>
                    <div class="micropadding"></div>
                </li>
                <li>In the Sublime Text Main Menu go to <b>Sublime Text</b> > <b>Preferences</b> > <b>Key Bindings</b></li>
                <li>Paste the code in the file that opens and save the file.</li>
            </ul>
        </div>

    </div>
</div>


