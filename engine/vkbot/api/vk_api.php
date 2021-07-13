<?php

include '../engine/config_site.php';

define('CALLBACK_API_CONFIRMATION_TOKEN', $config['vktoken']); //Строка для подтверждения адреса сервера из настроек Callback API
define('VK_API_ACCESS_TOKEN', $config['vksecret']); //Ключ доступа сообщества

define('VK_API_VERSION', $config['api_ver']); //Используемая версия API
define('VK_API_ENDPOINT', 'https://api.vk.com/method/');

function vkApi_messagesSend($peer_id, $message, $attachments = array()) {
  return _vkApi_call('messages.send', array(
    'peer_id'    => $peer_id,
	'random_id'  => rand(200, 99999999),
    'message'    => $message,
    'attachment' => implode(',', $attachments)
  ));
}

function vkApi_buttonSend($peer_id, $message, $string = [], $one_time = False) {
	$buttons = [];
	$i = 0;

	foreach ($string as $button_str) {
		$j = 0;
		foreach ($button_str as $button) {
			//$color = $this->replaceColor($button[2]);
			$buttons[$i][$j]["action"]["type"] = "text";

			if ($button[0] != null) {
					$buttons[$i][$j]["action"]["payload"] = json_encode($button[0], JSON_UNESCAPED_UNICODE);
			}

			$buttons[$i][$j]["action"]["label"] = $button[1];
			$buttons[$i][$j]["color"] = $button[2];
			$j++;
		}
		$i++;
	}

	$buttons = array(
		"one_time" => $one_time,
		"buttons" => $buttons
	);
	$buttons = json_encode($buttons, JSON_UNESCAPED_UNICODE);

	return _vkApi_call('messages.send', array(
		'peer_id'    => $peer_id,
		'random_id'	 => rand(200, 99999999),
		'message'    => $message,
		'keyboard'	 => $buttons
	));
}

function vkApi_usersGet($user_id) {
  return _vkApi_call('users.get', array(
    'user_id' => $user_id,
  ));
}

function vkApi_photosGetMessagesUploadServer($peer_id) {
  return _vkApi_call('photos.getMessagesUploadServer', array(
    'peer_id' => $peer_id,
  ));
}

function vkApi_photosSaveMessagesPhoto($photo, $server, $hash) {
  return _vkApi_call('photos.saveMessagesPhoto', array(
    'photo'  => $photo,
    'server' => $server,
    'hash'   => $hash,
  ));
}

function vkApi_docsGetMessagesUploadServer($peer_id, $type) {
  return _vkApi_call('docs.getMessagesUploadServer', array(
    'peer_id' => $peer_id,
    'type'    => $type,
  ));
}

function vkApi_docsSave($file, $title) {
  return _vkApi_call('docs.save', array(
    'file'  => $file,
    'title' => $title,
  ));
}

function _vkApi_call($method, $params = array()) {
  $params['access_token'] = VK_API_ACCESS_TOKEN;
  $params['v'] = VK_API_VERSION;

  $query = http_build_query($params);
  $url = VK_API_ENDPOINT.$method.'?'.$query;

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $json = curl_exec($curl);
  $error = curl_error($curl);

  curl_close($curl);

  $response = json_decode($json, true);

  return $response['response'];
}

function vkApi_upload($url, $file_name) {
  if (!file_exists($file_name)) {
    throw new Exception('File not found: '.$file_name);
  }

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, array('file' => new CURLfile($file_name)));
  $json = curl_exec($curl);
  $error = curl_error($curl);
  if ($error) {
    log_error($error);
    throw new Exception("Failed {$url} request");
  }

  curl_close($curl);

  $response = json_decode($json, true);
  if (!$response) {
    throw new Exception("Invalid response for {$url} request");
  }

  return $response;
}
