<div class="container">
    <div class="flexbox">
      <div class="flex-1" >
        © <?php echo date("Y") ;?> - Project Brand &nbsp;&nbsp;&nbsp;
        <a href="?session_renew=true"><i class="fa fa-refresh"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="javascript:void(0);" class="" data-toggle="collapse" data-target="#collapse<?php echo getUniqueId();?>">Deeplink</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <div id="collapse<?php echo $lastUniqueId;?>" class="collapse">
          <input type="text" class="form-control selectOnClick" name="" placeholder="" value="<?php echo getDeeplink(); ;?>">
        </div>
      </div>
      <div class="flex-1 align-right" >
        <a href="cheatsheet.php">Cheatsheet</a> &nbsp;&nbsp;
        <br>
        <br>
      </div>
    </div>
</div>