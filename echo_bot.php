<?php

require_once('./LINEBotTiny.php');

$channelAccessToken = 'bxcs67UsXL4dg6qSR4Nojg1djzE2QaP3RvedqZ2nY/2b+U6ypsmuoDr4j74SqKBQS2S8nFXRiOyfieRMLU2CEcqz570pODeTjUk8H4Y+AyhcO5qiEEj95HWSwIk23KR1AEIQjnUOw/JG+vdvTeVn1AdB04t89/1O/w1cDnyilFU=';
$channelSecret = '2ad35467614230c7a6dfe8e158e95988';

curl -X POST \
-H 'Content-Type:application/json' \
-H 'Authorization: Bearer {ENTER_ACCESS_TOKEN}' \
-d '{
    "replyToken":"nHuyWiB7yP5Zw52FIkcQobQuGDXCTA",
    "messages":[
        {
            "type":"text",
            "text":"user"
        },
        {
            "type":"text",
            "text":"May I help you?"
        }
    ]
}' https://api.line.me/v2/bot/message/reply
