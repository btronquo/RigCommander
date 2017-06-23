<?php

    require_once "inc/config.php";
    require_once "inc/functions.php";
    $getnano = getNano($api_nano_url_zec);
    $datanano = json_decode($getnano,true);
?>
<p class="text-info">Pour le wallet ZEC: <b><?php echo $datanano['data']['account']; ?></b></p>
<div class="col-md-2 text-center">
  <div style="height: 130px" class="panel panel-warning">
    <div class="panel-heading"><h3 class="panel-title">Hashrate</h3>
    </div>
    <div class="panel-body">
      <h4 data-bind="text: hashRate"><?php echo $datanano['data']['hashrate']; ?>Sol/s</h4>
    </div>
  </div>
</div>
<div class="col-md-2 text-center">
  <div style="height: 130px" class="panel panel-info">
    <div class="panel-heading"><h3 class="panel-title">Balance</h3>
    </div>
    <div class="panel-body">
      <h4 data-bind="text: hashRate"><?php echo $datanano['data']['balance']; ?> ZEC</h4>
    </div>
  </div>
</div>
