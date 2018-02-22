<?php
$access_token = 'QsDXx7o0AFTsWtutorWNidQ1GnFEGg//koYtmLsFeKICF6kp/tNUqbf4n8Ze6OK7WzLBFU4cuQuFYr6Mn9uBZsTn/lbjnlC2e0HIbiD7b//Oru5VVuFBxqSIDEwxYZu21KIF4sqcyDBw+ZzshR5trgdB04t89/1O/w1cDnyilFU=
';

$url = 'https://line-bot-1234.herokuapp.com/verify.php';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
