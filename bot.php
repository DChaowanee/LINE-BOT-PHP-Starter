<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-02.php

include ('https://line-bot-1234.herokuapp.com/bot.php');

$channelSecret = '174e20849cbebfbf44ae3dc13bc4af39';
$access_token  = 'zPLxyisAI/WlxaO/DGFFIP2FBHgkkkUDdp9tWHUyn69M/eUINGmCQ4aCJ0QQsNLzz/K5eeGjViPYZQMOB7o3WTxPYvY71UaNKtLPnYA6csbb2OH31GaSjjeYkJoaNaSpkB/N6xdoBNyTlD5NXrbhYwdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
$bot->sendMessageNew('[U4ba999634927d227427f4213d3658ad4/1548985319]', 'Hello World !!');

if ($bot->isSuccess()) {
	echo 'Succeeded!';
	exit();
}

// Failed
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
exit();
