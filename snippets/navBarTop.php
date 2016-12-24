<?php
// Define Navigation keys
// You can use these to specify which item should be active

$navKeys = ["start","basics","data","functions","css"];

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
        <li  class="<?php echo $navbarClasses[navId()];?>">
          <a href="start.php">Getting Started</a>
        </li>
        <li  class="<?php echo $navbarClasses[navId()];?>">
          <a href="basics.php">Basics</a>
        </li>
        <li  class="<?php echo $navbarClasses[navId()];?>">
          <a href="data.php">Using Data</a>
        </li>
        <li  class="hide <?php echo $navbarClasses[navId()];?>">
          <a href="javascript:void(0);">Functions-Reference</a>
        </li>
        <li  class="hide <?php echo $navbarClasses[navId()];?>">
          <a href="javascript:void(0);">CSS-Reference</a>
        </li>

      </ul>

    </nav>
  </div>
</header>