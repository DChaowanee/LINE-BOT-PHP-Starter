<?php
$access_token = 'zPLxyisAI/WlxaO/DGFFIP2FBHgkkkUDdp9tWHUyn69M/eUINGmCQ4aCJ0QQsNLzz/K5eeGjViPYZQMOB7o3WTxPYvY71UaNKtLPnYA6csbb2OH31GaSjjeYkJoaNaSpkB/N6xdoBNyTlD5NXrbhYwdB04t89/1O/w1cDnyilFU=';

$url = 'https://line-bot-1234.herokuapp.com/verify.php';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
