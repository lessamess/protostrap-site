<div class="row">
    <div class="col-md-8">
        Protostrap allows users to change the prototype's data during the session. <br>
        This can be done in several ways.

        <h4 class="sub">Changing data via a GET parameter</h4>
        If a variable exists in the session you can change its content when calling a page by passing the variable as a GET parameter in the request.
        <br><br>
        Let's assume you have a variable <b>favoriteColor</b> and its value is blue. To change this value you can have a link linke this:
        <br><div class="micropadding"></div>
        <pre><code class="htm">&lt;a href="?favoriteColor=red">&lt;/a></code></pre>

        <a id="ajax"></a>
        <h4 class="sub">Changing data via an AJAX request</h4>
        If you want to stay on the page you can change the data via a AJAX request through jQuery:
        <br><br>
        Changing Data over AJAX is much more powerful then via GET parameters, since you can perform changes also on arrays.
        <br><br>
        The options for updateSessionVar are:
        <br><div class="micropadding"></div>
        <table class="table table-condensed noTopBorder">
            <tr>
                <th>set</th>
                <td>Sets the variable defined.

                    <pre><code class="javascript">updateSessionVar("set","favoriteColor","red");</code></pre>
                    The first parameter that is passed (in this case <b>set</b>) indicates what Protostrap should perform. <br><br>
                    Values inside arrays can be changed by separating each level with a dot.
                    <br><div class="micropadding"></div>
                    <pre><code class="javascript">updateSessionVar("set","news.1.title","...");</code></pre>
                    <br><br>

                    <b>Test it:</b>
                    <div class="flexbox">
                        <div class="flex-1">
                            Current: <br>

                            <?php echo $news[1]['title'] ;?>
                        </div>
                        <div class="flex-1">
                            Change to:
                            <div class="input-group ">
                                <input id="changeVarOverAjax" type="text" class="form-control" name="" placeholder="">
                                <span class="input-group-addon">change</span>
                            </div>
                        </div>



                    <br>


                    </div>
                    <div id="feedback" class="hide">
                        Variable Changed. <br>
                        <a href="data.php#ajax" class="btn btn-primary">Reload page to see it in effect</a>
                    </div>
                    <br><br>

                 </td>
             </tr>
             <tr>
                <th>push</th>
                <td>
                    Adds an entry to an array.
                    <br><div class="micropadding"></div>
                    <pre><code class="javascript">updateSessionVar("push","searchHistory","Pillow");</code></pre>
                    This will add an entry to the Array search history.
                    <br><br>
                </td>
             </tr>
             <tr>
                 <th>remove</th>
                 <td>
                    Removes an entry to an array.
                    <br><div class="micropadding"></div>
                    <pre><code class="javascript">updateSessionVar("remove","news.1",);</code></pre>
                    This will remove the news with the index 1
                    <br><br>
                </td>

             </tr>
             <tr>
                <th>null</th>
                <td>
                    Sets a variable an empty value or empties an array to .
                    <br><div class="micropadding"></div>
                    <pre><code class="javascript">updateSessionVar("null","searchHistory",);</code></pre>
                    This will remove all entries of the array searchHistory. <br>
                    <br><div class="micropadding"></div>
                    <pre><code class="javascript">updateSessionVar("null","favoriteColor",);</code></pre>
                    This will set the value of favoriteColor to an empty string.
                </td>
             </tr>
         </table>

    </div>
    <div class="col-md-4">      </div>
</div>