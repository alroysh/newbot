<?php
	date_default_timezone_set('Asia/Singapore');
	$wita= date('H.i.s');
	date_default_timezone_set('Asia/Jakarta');
	$wib= date('H.i.s');
	date_default_timezone_set('Asia/Jayapura');
	$wit= date('H.i.s');
	require_once('./line_class.php');
	$channelAccessToken = 'bxcs67UsXL4dg6qSR4Nojg1djzE2QaP3RvedqZ2nY/2b+U6ypsmuoDr4j74SqKBQS2S8nFXRiOyfieRMLU2CEcqz570pODeTjUk8H4Y+AyhcO5qiEEj95HWSwIk23KR1AEIQjnUOw/JG+vdvTeVn1AdB04t89/1O/w1cDnyilFU=';
	$channelSecret = '2ad35467614230c7a6dfe8e158e95988';
	$client = new LINEBotTiny($channelAccessToken, $channelSecret);
	//var_dump($client->parseEvents());
	//$_SESSION['userId']=$client->parseEvents()[0]['source']['userId'];
	/*
	{
	  "replyToken": "nHuyWiB7yP5Zw52FIkcQobQuGDXCTA",
	  "type": "message",
	  "timestamp": 1462629479859,
	  "source": {
		"type": "user",
		"userId": "U206d25c2ea6bd87c17655609a1c37cb8"
	  },
	  "message": {
		"id": "325708",
		"type": "text",
		"text": "Hello, world"
	  }
	}
	*/
	$userId 	= $client->parseEvents()[0]['source']['userId'];
	$replyToken = $client->parseEvents()[0]['replyToken'];
	$timestamp	= $client->parseEvents()[0]['timestamp'];
	$message 	= $client->parseEvents()[0]['message'];
	$messageid 	= $client->parseEvents()[0]['message']['id'];
	$profil = $client->profil($userId);
	$pesan_datang = $message['text'];
	$jam = date("H.i.s");
	$ip = $_SERVER['REMOTE_ADDR'];
	$browser= $_SERVER['HTTP_USER_AGENT'];
	$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	$a = 100;
	$b = 230;
	$hasil = $a+$b;
	//pesan bergambar
if($message['type']=='text')
	{
		if($pesan_datang=='Halo')
		{
			
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => 'Halo ' .$profil->displayName.''
										)
								)
							);
					
		}
		else
				if($pesan_datang=='link fotoku')
		{
			
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => 'Link Foto Kamu : ' .$profil->pictureUrl.''
										)
								)
							);
					
		}
	else
	if($pesan_datang=='/info')
		{
			$balas = array(
			'replyToken' => $replyToken,														
			'messages' => array(
					array(
					'type' => 'text',					
					'text' => 'IP : ' . $ip. ', Browser : ' . $browser .', Hostname : '. $hostname
										)
								)
							);
					
		}
		else
				if($pesan_datang=='status')
		{
			
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => 'Status Message Kamu : ' .$profil->statusMessage.''
										)
								)
							);
					
		}
		else
				if($pesan_datang=='stickernya mana?')
		{
			
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'sticker',					
											'packageId'=> '1',
											'stickerId'=> '5'
										)
								)
							);
					
		}
		else
		if($pesan_datang=='ggwp')
		{
			$get_sub = array();
			$aa =   array(
							'type' => 'image',									
							'originalContentUrl' => 'https://medantechno.com/line/images/bolt/1000.jpg',
							'previewImageUrl' => 'https://medantechno.com/line/images/bolt/240.jpg'	
							
						);
			array_push($get_sub,$aa);	
			$get_sub[] = array(
										'type' => 'text',									
										'text' => 'Halo '.$profil->displayName.', Anda memilih menu 2, harusnya gambar muncul.'
									);
			
			$balas = array(
						'replyToken' 	=> $replyToken,														
						'messages' 		=> $get_sub
					 );	
			/*
			$alt = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => '[*] '.join(str(f) for f in dataResult).'
										)
								)
							);
			*/
			//$client->replyMessage($alt);
		}
	else
		if($pesan_datang=='/jam')
		{
			$get_sub = array();
			$aa =   array(
							'type' => 'text',									
							'text' => 'Wib  : '. $wib
							
						);
			array_push($get_sub,$aa);	
			$get_sub[] = array(
							'type' => 'text',									
							'text' => 'Wita : '. $wita
									);
			array_push($get_sub);
			$get_sub[] = array(
							'type' => 'text',									
							'text' => 'Wit  : '. $wit
									);
			$balas = array(
						'replyToken' 	=> $replyToken,														
						'messages' 		=> $get_sub
					 );	
			/*
			$alt = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => '[*] '.join(str(f) for f in dataResult).'
										)
								)
							);
			*/
			//$client->replyMessage($alt);
		}
		else
		if($pesan_datang=='3')
		{
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => 'Fungsi PHP base64_encode velicious :'. base64_encode("velicious")
										)
								)
							);
					
		}
	else
		if($pesan_datang=='/tanggal')
		{
			
			$balas = array(
			'replyToken' => $replyToken,														
			'messages' => array(
			              array(
					  'type' => 'text',					
					   'text' => 'Now '. date('l, d-m-Y')
										)
								)
							);
					
		}
				else
			if($pesan_datang=='/coba')
		{
			
			$balas = array(
			'replyToken' => $replyToken,														
			'messages' => array(
			              array(
					   'type' => 'template',	
					   'altText' => 'Movies',
					   'template' =>[
					  'type' => 'buttons',	
					   'thumbnailImageUrl' => 'https://s-media-cache-ak0.pinimg.com/236x/0c/cd/6a/0ccd6a5e74067bab2d43b4c3e7501fd1.jpg',
						'title' => 'Movies',
						'text' => 'Tempat Download Film',
						'actions' => [
						[
						'type' => 'uri',
						    'label' => 'Detalis',
						    'uri' => 'http://lk21.org'
						]
						]
						
								]
								)
								)
							);
					
		}
			else
			if($pesan_datang=='/about')
		{
			
			$balas = array(
			'replyToken' => $replyToken,														
			'messages' => array(
			              array(
					   'type' => 'template',	
					   'altText' => 'Creator Bot',
					   'template' =>[
					  'type' => 'buttons',	
					   'thumbnailImageUrl' => 'https://s-media-cache-ak0.pinimg.com/600x315/9e/e4/a6/9ee4a64469336c1109775f11f25363ff.jpg',
						'title' => 'Bot Creator',
						'text' => 'Created by alroysh_',
						'actions' => [
						[
						'type' => 'uri',
						    'label' => 'Add Line',
						    'uri' => 'http://line.me/ti/p/~alroysugiarto'
						],
						[
						'type' => 'uri',
						    'label' => 'Follow Instagram',
						    'uri' => 'https://www.instagram.com/alroysh_/'
						]	
						]
						
								]
								)
								)
							);
					
		}
	else
			if($pesan_datang=='/own')
		{
			
			$balas = array(
			'replyToken' => $replyToken,														
			'messages' => array(
			              array(
					   'type' => 'template',	
					   'altText' => 'this is a confirm template',
					   'template' =>[
					  'type' => 'confirm',
						'text' => 'Are you sure?',
						'actions' => [
						[
						'type' => 'message',
						    'label' => 'Yes',
						    'text' => 'yes'
						],
						[
						'type' => 'message',
						    'label' => 'No',
						    'text' => 'no'
						]	
						]
						
								]
								)
								)
							);
					
		}
	
else
			if($pesan_datang=='Owner')
		{
			
			$balas = array(
			'replyToken' => $replyToken,														
			'messages' => array(
			              array(
					   'type' => 'template',	
					   'altText' => 'Owner Group',
					   'template' =>[
					  'type' => 'buttons',	
						'title' => 'Owner Group',
						'text' => 'Velda Sitanggang',
						'actions' => [
						[
						'type' => 'uri',
						    'label' => 'Contact Line',
						    'uri' => 'http://line.me/ti/p/~velda_sitanggang'
						]	
						]
						
								]
								)
								)
							);
					
		}
		else
		if($pesan_datang=='Lokasi Bot')
		{
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'location',					
											'title' => 'Lokasi Saya.. Klik Detail',					
											'address' => 'McDonald',					
											'latitude' => '-8.700088',					
											'longitude' => '115.178097' 
										)
								)
							);
					
		}
		else
		if($pesan_datang=='13626')
		{
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => 'Testing PUSH pesan ke anda'
										)
								)
							);
							
			$push = array(
								'to' => $userId,									
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => 'Pesan ini dari velicious'
										)
								)
							);
							
							
		}
	}else if($message['type']=='sticker')
	{	
		$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',									
											'text' => 'Terimakasih stikernya... '										
										
										)
								)
							);
		
$response = $bot->leaveRoom('<groupId>');
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();		
	}
	 
	$result =  json_encode($balas);
	//$result = ob_get_clean();
	file_put_contents('./balasan.json',$result);
	$client->replyMessage($balas);
		
