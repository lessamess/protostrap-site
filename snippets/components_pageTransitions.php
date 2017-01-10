<div class="row">
    <div class="col-md-8">
        Page transitions let you simulate app-like behaviour with your prototype. <br> <br>
        Protostrap comes with a template for page transitions. The file <b>template_mobile.php</b> contains all you need to get your app-like project off the ground.
        <br><br>
        Page transitions has these elements:
        <ul class="simpleList">
            <li><b>Pages</b>: These are bundled in a container with the id <b>pt-main</b>. Each page has an id that starts with <b>page-</b> and ends with an unique identifier. This identifier is used to locate the corresponding top- and tabbar</li>
            <li><b>Topbars</b>: These are bundled in a container with the id <b>topbarContainer</b>. The topbars can contain any content you like. Protostrap provides examples with icons and labels</li>
            <li><b>Tabbars</b>: These are bundled in a container with the id <b>tabbarContainer</b>. The tabbars are typically made up of buttons. Protostrap also provides a iOS like tabview navigation with icons, labels and badges</li>
            <li><b>Transition starters</b>: You can initiate transitions with any element that has the class <b>goto</b>, the attribute <b>data-goto</b> and the attribute <b>data-animation</b>. <br>
                The data-goto value has to be the identifier of an existing page inside pt-main. The animation value is one of the following: <br>
                 moveInFromRight, moveInFromLeft, moveInFromBottom, moveInFromTop, moveOutFromTop, moveOutToRight, moveOutFromRight,
            </li>
        </ul>

    </div>
    <div class="col-md-4">
        <div id="" class="collapse in collapse<?php echo getUniqueId();?>">
            <img class="img-responsive" src="assets/img/page_transitions.gif" alt="">
            <a href="javascript:void(0);" class="btn" data-toggle="collapse" data-target=".collapse<?php echo $lastUniqueId;?>">Try this out yourself</a>
        </div>
        <div id="" class="collapse collapse<?php echo $lastUniqueId;?>">
            <iframe width="320" height="480" src="template_mobile.php"></iframe>
        </div>

    </div>
</div>
<pre><code>&lt;!-- T O P B A R S -->
&lt;div class="topbarContainer ">
    &lt;div id="topbar-start" class="flexbox topbar topbar-current">
        &lt;div class="fix80" >
            &lt;a href="javascript:void(0);" class="goto btn"
                data-goto="camera" data-animation="moveInFromBottom">
                &lt;i class="icon ion-ios-camera-outline topbar-icon">&lt;/i>
            &lt;/a>
        &lt;/div>
        &lt;div class="flex-1 align-center">
                &lt;span class="topbar-title">mobile template&lt;/span>
        &lt;/div>

        &lt;div class="fix80 align-right" >
            &lt;a href="javascript:void(0);" class="goto btn"
                data-goto="notifications" data-animation="moveInFromRight">
                &lt;i class="icon ion-ios-bell-outline topbar-icon">&lt;/i>
                &lt;!-- You can add badges to topbar elements -->
                &lt;span class="topbar-badge">1&lt;/span>
            &lt;/a>
        &lt;/div>
    &lt;/div>

    &lt;div id="topbar-notifications" class="flexbox topbar">
        &lt;div class="fixed-size-120" >
            &lt;a href="javascript:void(0);" class="btn goto"
                data-animation="moveOutFromRight" data-goto="start">
                &lt;i class="icon ion-ios-arrow-back topbar-icon">&lt;/i>
            &lt;/a>
        &lt;/div>
        &lt;div class="flex-1 align-center">
            &lt;span class="topbar-title">Notifictions&lt;/span>
        &lt;/div>
        &lt;div class="fixed-size-120 align-right" >

        &lt;/div>
    &lt;/div>
&lt;/div>


&lt;!-- T A B B A R S -->
&lt;div id="tabbarContainer" class="tabnavbar navbar-default navbar-fixed-bottom transparent ">

    &lt;div id="tabbar-start" class="flexbox tabbar tabbar-current">
        &lt;div class="flex-1">
            &lt;button class="btn btn-primary btn-block goto "
                data-animation="moveInFromLeft" data-goto="page2">Register&lt;/button>
        &lt;/div>
        &lt;div class="flex-1">
            &lt;button class="goto btn-block  btn btn-default"
                data-animation="moveInFromTop" data-goto="page3">Sign in&lt;/button>
        &lt;/div>
    &lt;/div>


    &lt;div id="tabbar-notifications" class="flexbox tabbar ">
        &lt;div class="flex-1">
            &lt;button class="goto btn-block  btn btn-primary"
                data-animation="moveInFromleft" data-goto="start">Go back&lt;/button>
        &lt;/div>
    &lt;/div>


    &lt;!-- Pages with no tabbar habe a hidden tabbar -->
    &lt;div id="tabbar-camera" class="flexbox tabbar hide">&lt;/div>

&lt;/div>

&lt;!-- P A G E S -->
&lt;div id="pt-main" class="pt-perspective">
    &lt;div id="page-start" class="first-page pt-page container">
            &lt;!-- Page Content -->
    &lt;/div>
    &lt;div id="page-notifications" class="pt-page container ">
            &lt;!-- Page Content -->
    &lt;/div>
&lt;/div>
</code></pre>
