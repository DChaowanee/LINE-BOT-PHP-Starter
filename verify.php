<?php
$access_token = 'cptUylptlTr7UCnfwBrWPRKdPp4Sxf9210yvXSPtwu0jHkem7nnu62b1y+sHZYuyz/K5eeGjViPYZQMOB7o3WTxPYvY71UaNKtLPnYA6csa96tRV9uUQCTo+BpCmQzO7NzTLmlR8jVE1qFCiB1HKVwdB04t89/1O/w1cDnyilFU=';

$url = 'https://line-bot-1234.herokuapp.com/verify.php';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
