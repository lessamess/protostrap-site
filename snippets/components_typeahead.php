<br>
<div class="row">
    <div class="col-md-4">
        <span class="form">
            <!-- Typeahead - Change Data in assets/js/main.js -->
            <input type="text" class="form-control typeahead" name="mytypeahead" placeholder="Typeahead (Try: foo)">
        </span>
    </div>
    <div class="col-md-6">
        Protostrap integrates with Twitter's Typeahead library. These are some ways to make use of the library
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
        Adding typeahead to an input field is simply done by adding the class <b>typeahead</b> to it.
        <div class="micropadding"></div>
        <pre><code class="html">&lt;span class="form">
    &lt;input type="text" class="form-control typeahead" name="mytypeahead" placeholder="Typeahead (Try: foo)">
&lt;/span></code></pre>
    </div>
</div>
<br>
<h4>Getting the data into the typeahead</h4>
The file <b>snippets/typeahead.php</b> contains everything that Typeahead needs:
<ul class="simpleList">
     <li>The source data: this is the data that is searched and suggested by Typeahead</li>
     <li>The display: All the templates that Typeahead needs, for the suggestions, the footer and in case no entries are found.</li>
     <li>The callback: defining what happens once an entry is selected.</li>
 </ul>
<br>
 The source data can be any form of object. The keys (<b>name</b> and <b>price</b>) can be chosen freely. You can also have more or fewer keys, Typeahead is very flexible in this respect.
 <div class="micropadding"></div>
 <pre><code class="javascript">var sourcedata = {
    0: {name:'foo bar', price:'6.99'},
    1: {name:'foo fighters ticket', price:'12.49'},
    2: {name:'a fools errand', price:'18.00'},
    3: {name:'football', price:'26.49'}
};</code></pre>

<br> The display and callback are taken care of in this block, which is divided int the segments <b>Typeahead options</b>, <b>Typeahead source and templates</b> and <b>Typeahead callback</b>
<div class="micropadding"></div>
<pre><code class="javascript">// Typeahad options
$('.typeahead').typeahead({
  highlight: true,
  minLength: 1
},

// Typeahead source and templates
{
  source: substringMatcher(sourcedata),
  templates: {
    notFound: '&lt;p class="tt-noentries" >&lt;strong>No entries found&lt;/strong>&lt;/p>',
    footer: '&lt;p class="tt-footer" >
                  &lt;button class="btn btn-default">Show all results&lt;/button>
             &lt;/p>',
    suggestion: function(data){
          return '&lt;p class="topborder">
                       &lt;strong>' + data.name + '&lt;/strong>
                       &lt;span class="pull-right">$' + data.price  + '&lt;/span>
                  &lt;/p>';
        }
    }
})

// Typeahead callback
.on('typeahead:selected', function (event, selected) {
    console.log(selected.name);
    console.log(selected.price);
});</code></pre>
