<?php
// Define Navigation keys
// You can use these to specify which item should be active

$navKeys = ["start","basics","css","javascript", "php", "admin", "data","3rdparty","cheatsheet"];

// LEAVE ALONE
$navbarClasses = array_fill(0, 10, '');
foreach ($navKeys as $key => $item){
    if($item == $activeNavigation) {
        $navbarClasses[$key] = "active";
    }
 }
?>



<header role="banner" class="navbar navbar-default navbar-fixed-top ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#headernav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><h3 class="brandnav"><?= $brand;?></h3></a>
    </div>
    <nav role="navigation" class="collapse navbar-collapse " id="headernav" >
      <ul class="nav navbar-nav">
        <li  class="<?php echo $navbarClasses[0];?>">
          <a href="start.php">Setup</a>
        </li>
        <li  class="<?php echo $navbarClasses[1];?>">
          <a href="basics.php">Basics</a>
        </li>
        <li  class="<?php echo $navbarClasses[2];?>">
          <a href="javascript:void(0);">CSS</a>
        </li>
        <li  class="<?php echo $navbarClasses[3];?>">
          <a href="javascript:void(0);">JavaScript</a>
        </li>
        <li  class="<?php echo $navbarClasses[4];?>">
          <a href="javascript:void(0);">PHP</a>
        </li>
        <li  class="<?php echo $navbarClasses[5];?>">
          <a href="data.php">Admin Page</a>
        </li>
        <li  class="<?php echo $navbarClasses[6];?>">
          <a href="data.php">Using Data</a>
        </li>
        <li  class="<?php echo $navbarClasses[7];?>">
          <a href="3rdparty.php">3rd Party Plugins</a>
        </li>
        <li  class="<?php echo $navbarClasses[8];?>">
          <a href="sublime.php">Index</a>
        </li>
      </ul>

    </nav>
  </div>
</header>