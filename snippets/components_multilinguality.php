<div class="row">
    <div class="col-md-10">
        Keys are translated by calling the function __() in your html. (The function is just two underscores). <br>
        You have to pass the <b>key</b> parameter and can optionally pass a <b>language</b> parameter. If no language parameter is passed the current language is taken. <br>
        If a key can't be translated the key itself is show.
        <br> <br>
        Example for the Key <b>thisIsAtest</b>: <br>
        <div class="micropadding"></div>
    </div>
</div>


<table class="table table-condensed  p75">
    <tr>
        <td>Active Language:</td>
        <td><?php echo __("thisIsAtest"); ?></td>
    </tr>
    <tr>
        <td>English:</td>
        <td><?php echo __("thisIsAtest","en"); ?></td>
    </tr>
    <tr>
        <td>German:</td>
        <td><?php echo __("thisIsAtest","de"); ?></td>
    </tr>
    <tr>
        <td>French:</td>
        <td><?php echo __("thisIsAtest","fr"); ?> (Not available, returns the key)</td>
    </tr>
</table>