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

function getEwbf($ip)
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

//

/* bacckup
$ch = curl_init();
// ---- set ip
curl_setopt($ch, CURLOPT_URL, "127.0.0.1:42000");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "{\"ID\":\"0\", \"method\":\"getstat\"}");

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

$array = json_decode($result,TRUE);

// setup variables...
$gpu1_temp =  $array['result'][0]['temperature'];
$gpu1_power = $array['result'][0]['gpu_power_usage'];
$gpu1_hashrate = $array['result'][0]['speed_sps'];
$gpu1_accepted_shares = $array['result'][0]['accepted_shares'];

$gpu2_temp =  $array['result'][1]['temperature'];
$gpu2_power = $array['result'][1]['gpu_power_usage'];
$gpu2_hashrate = $array['result'][1]['speed_sps'];
$gpu2_accepted_shares = $array['result'][1]['accepted_shares'];

$total_hashrate = $gpu1_hashrate + $gpu2_hashrate;
*/



?>
