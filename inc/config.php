<?php
// config.php - you need to configure these values with your own!


// ---- wallet ZEC
$wallet_eth = ''; // your wallet eth
$wallet_sia = ''; // your wallet sia
$wallet_zec = 't1g5uffMZarFayPmaMoViR2WsiGXLYbKpGM'; // your wallet zec

// ----- put 'yes' or 'no' if you want to use these crypto currencies...
$use_eth = 'no';
$use_sia = 'no';
$use_zec = 'yes';

// ----- EWFB ip adress
$ewfb_ip = '192.168.1.83:42000'; // you can set to 127.0.0.1:42000 if you run ewfb in the same server than this webapp



// ------------------------- Don't touch that - (or be kill - but that's none of my business.. ) ------------------ //

// API URL - NANOPOOL
$api_nano_url_eth = "https://api.nanopool.org/v1/eth/user/". $wallet_eth;
$api_nano_url_sia = "https://api.nanopool.org/v1/sia/user/". $wallet_sia;
$api_nano_url_zec = "https://api.nanopool.org/v1/zec/user/". $wallet_zec;

// -- more pool support soon ;) ------------


?>
