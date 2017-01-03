<?php
if(!isset($pageName)){
    $pageName = "gettingStarted";
}
foreach ($sections as $key => $section): ?>

    <section  class="">

        <h2 id="<?php echo $key ;?>" style="margin-top: 0;padding-top: 60px;"><?php echo $section['title'] ;?></h2>
        <?php if(file_exists("snippets/".$pageName."_".$key.".php")){
            include("snippets/".$pageName."_".$key.".php");
            } ?>

    </section>
<?php endforeach ?>