<?php

// Get data for nano
//$result = getNano($api_nano_url_zec);
// Json decode
//$data = json_decode($result,true);

// test results
//echo '<p>Account : '.$data['data']['account'].'</p>';

//$yoyo = getEwbf($ip);
//$dadata = json_decode($yoyo,true);
//echo '<p>Account : '.$dadata['result'][0]['temperature'].'</p>';

// ---------------------- CURL EXEC FOR NANOPOOL DATA - ALL MONEY BABY BABY!-----------------
function getNano($url)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, $url);
  $result = curl_exec ($ch);
  curl_close ($ch);
  return $result;
}

function getEwfb($ip)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, $ip);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "{\"ID\":\"0\", \"method\":\"getstat\"}");
  $result = curl_exec ($ch);
  curl_close ($ch);
  return $result;
}

// ---------------------- OTHER-----------------
function isDown($rigid, $rigactive){

  if($rigactive == true){
    echo '
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-check-circle fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-9 text-center">
                            <h3>'.$rigid.'</h3>
                            <div>Connecté</div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-center">
                  <a id="submit" class="btn btn-primary" href="#" role="button">RESTART RIG #02</a>
                </div>
            </div>
        </div>
        ';
  }else
  {
    echo '
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-check-circle fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-9 text-center">
                            <h3>'.$rigid.'</h3>
                            <div>Connecté</div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-center">
                  <a id="submit" class="btn btn-default" href="#" role="button" disabled>RESTART RIG #02</a>
                </div>
            </div>
        </div>
        ';
  }

}
?>
