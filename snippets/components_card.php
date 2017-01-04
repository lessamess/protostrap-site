<div class="row flex-row ">
    <?php
    $i = 1;
    while ($i <= 4) {?>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="card">
                <img class="card-img-top" src="assets/img/placeholderImage.svg" class="img-responsive" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">A description of your card's content.
                    <?php if($i == 3){
                        echo "<br>With more and more content";
                        } ?></p>
                </div>
            </div>
        </div>
        <?php $i++;
    } ?>
</div>
