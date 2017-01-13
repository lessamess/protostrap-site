<ul id="sidebar" class="nav nav-stacked fixed">
    <?php foreach ($navItems as $key => $navItem): ?>
        <li>
            <a href="#<?php echo $key ;?>"><?php echo $navItem['title'] ;?></a>
            <?php if(isset($navItem['sub'])){?>
            <ul class="nav nav-stacked">
                <?php foreach ($navItem['sub'] as $keysub => $sub) { ?>
                    <li><a href="javascript:void(0);" class="scrollTo" data-id="<?php echo $keysub ;?>"><?php echo $sub['title'] ;?></a></li>
                <?php } ?>
            </ul>
            <?php } ?>
        </li>
    <?php endforeach ?>
</ul>