<?php

require_once('./LINEBotTiny.php');

$channelAccessToken = 'bxcs67UsXL4dg6qSR4Nojg1djzE2QaP3RvedqZ2nY/2b+U6ypsmuoDr4j74SqKBQS2S8nFXRiOyfieRMLU2CEcqz570pODeTjUk8H4Y+AyhcO5qiEEj95HWSwIk23KR1AEIQjnUOw/JG+vdvTeVn1AdB04t89/1O/w1cDnyilFU=';
$channelSecret = '2ad35467614230c7a6dfe8e158e95988';
$client = new LINEBotTiny($channelAccessToken, $channelSecret);

    	$userId 	= $client->parseEvents()[0]['source']['userId'];
	$replyToken = $client->parseEvents()[0]['replyToken'];
	$timestamp	= $client->parseEvents()[0]['timestamp'];
	$message 	= $client->parseEvents()[0]['message'];
	$messageid 	= $client->parseEvents()[0]['message']['id'];
	$profil = $client->profil($userId);
	$pesan = $message['text'];

if($message['text']=='text'){
if($pesan=='Gobs'){
$balas=array(
    'replyToken' =>  $replyToken
    'messages' => array(array(
    'type' => 'text',					
	'text' => 'Halo ' .$profil->displayName.''
    )
                       )
   );
}
}



echo "OK";
