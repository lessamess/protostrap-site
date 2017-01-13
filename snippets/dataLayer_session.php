<div class="row">
    <div class="col-md-8">
        Protostrap is a session based tool. This means that all information that is entered or changed just lives in the memory of the server. When the session is renewed the original data is restored. <br><br> This is ideal for testing because the prototype can be renewed after each test without having to perform a complex roll-back of data.
        Renewing the session is done via a request with the parameter <b>session_renew</b>:
        <br><div class="micropadding"></div>
         <div class="block align-right">
            <a href="javascript:void(0);" class="copyToClipboard" data-target="sessionrenew">Copy Code</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <pre><code class="html">&lt;a href="?session_renew=true">Renew Session&lt;/a></code></pre>
        <div id="sessionrenew" class="hide"><a href="?session_renew=true">Renew Session</a></div>
        <br>Protostraps standard footer already contains a renew link you can use.
        <br><br>
        When the session is renewed all the data that has changed during the session is reset:
        <ul class="simpleList">
            <li>Users are logged out</li>
            <li>Changed data is restored </li>
            <li>GET parameters that are meant to change data will be without effect</li>
        </ul>
        <br>
        The Session can also be renewed by pressing <b>ALT+r</b>
    </div>
</div>

