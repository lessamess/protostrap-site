<hr>
<h5>Table of contents</h5>
<ul id="sidebar" class="nav nav-stacked ">
    <?php foreach ($navItems as $key => $navItem): ?>
        <li >
            <a href="#<?php echo $key ;?>" class="toc" ><?php echo $navItem['title'] ;?></a>
            <?php if(isset($navItem['sub'])){?>
            <ul class="nav nav-stacked">
                <?php foreach ($navItem['sub'] as $keysub => $sub) { ?>
                    <li><a href="#<?php echo $keysub ;?>"><?php echo $sub['title'] ;?></a></li>
                <?php } ?>
            </ul>
            <?php } ?>
        </li>
    <?php endforeach ?>
</ul>