<?php

  require_once "inc/config.php";
  require_once "inc/functions.php";

  $getewfb = getEwfb($ewfb_ip);
  $dataewfb = json_decode($getewfb,true);

// ----------------------- CURL EXEC FOR MAIN DATA --------------------
/*
$ch = curl_init();
// ---- set ip
curl_setopt($ch, CURLOPT_URL, "$ewfb_ip");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "{\"ID\":\"0\", \"method\":\"getstat\"}");

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

$array = json_decode($result,TRUE);
*/


// setup variables...

$gpu1_temp =  $dataewfb['result'][0]['temperature'];
$gpu1_power = $dataewfb['result'][0]['gpu_power_usage'];
$gpu1_hashrate = $dataewfb['result'][0]['speed_sps'];
$gpu1_accepted_shares = $dataewfb['result'][0]['accepted_shares'];

$gpu2_temp =  $dataewfb['result'][1]['temperature'];
$gpu2_power = $dataewfb['result'][1]['gpu_power_usage'];
$gpu2_hashrate = $dataewfb['result'][1]['speed_sps'];
$gpu2_accepted_shares = $dataewfb['result'][1]['accepted_shares'];

$total_hashrate = $gpu1_hashrate + $gpu2_hashrate;



?>

 <table class="table table-condensed">
         <tr>
         	<th>GPU ID</th>
                 <th>TEMPERATURE</th>
                 <th>POWER</th>
 		<th>HASHRATE</th>
 		<th>ACCEPTED SHARES</th>
         </tr>

 	<tr>
                 <td>GPU 0</td>
                 <td><?php echo $gpu1_temp;  ?></td>
                 <td><?php echo $gpu1_power;  ?></td>
 		<td><?php echo $gpu1_hashrate;  ?></td>
 		<td><?php echo $gpu1_accepted_shares;  ?></td>
         </tr>
         <tr>
                 <td>GPU 1</td>
                 <td><?php echo $gpu2_temp;  ?></td>
                 <td><?php echo $gpu2_power;  ?></td>
                 <td><?php echo $gpu2_hashrate;  ?></td>
                 <td><?php echo $gpu2_accepted_shares;  ?></td>
         </tr>
 </table>

 <h4>Hashrate total en direct: <em><?php echo $gpu1_hashrate + $gpu2_hashrate; ?></em></h4>
