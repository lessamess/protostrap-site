<?php
// Define Navigation keys
// You can use these to specify which item should be active

$navKeys = ["start","basics","css","javascript", "php", "components", "data","3rdparty","cheatsheet"];

// LEAVE ALONE
$navbarClasses = array_fill(0, 10, '');
foreach ($navKeys as $key => $item){
    if($item == $activeNavigation) {
        $navbarClasses[$key] = "active";
    }
 }
?>

<a href="https://github.com/lessamess/Protostrap/archive/master.zip" id="dowloadButton" class="btn btn-success btn-lg visible-lg"><i class="fa fa-download"></i> Download Protostrap</a>
<a href="https://github.com/lessamess/Protostrap/archive/master.zip" id="dowloadButton" class="btn btn-success btn-lg hidden-lg"><i class="fa fa-download"></i></a>

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
          <a href="css.php">CSS</a>
        </li>
        <li  class="<?php echo $navbarClasses[3];?>">
          <a href="javascript.php">JavaScript</a>
        </li>
        <li  class="<?php echo $navbarClasses[4];?>">
          <a href="php.php">PHP</a>
        </li>
        <li  class="<?php echo $navbarClasses[5];?>">
          <a href="components.php">Components</a>
        </li>
        <li  class="<?php echo $navbarClasses[6];?>">
          <a href="data.php">Using Data</a>
        </li>
        <li  class="<?php echo $navbarClasses[7];?> hide">
          <a href="3rdparty.php">3rd Party Plugins</a>
        </li>
        <li  class="<?php echo $navbarClasses[8];?>">
          <a href="cheatsheet.php">Cheat Sheet</a>
        </li>
      </ul>

    </nav>
  </div>
</header>