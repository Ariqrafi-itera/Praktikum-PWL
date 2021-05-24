<?php

require './vendor/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '314299673400867',
	'app_secret' => '3515b74a0fac9d971895b66fc6d292a8',
	'default_graph_version' => 'v2.7'
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/Tugas%20Praktikum%201/");

try {
	$accessToken = $helper->getAccessToken();
	if (isset($accessToken)) {
		$_SESSION['access_token'] = (string)$accessToken;

		header("Location:home.php");
	}

	if (isset($_SESSION['access_token'])) {
		$fb->setDefaultAccessToken($_SESSION['access_token']);
		$respond = $fb->get('/me?locale=en_US&fields=name,email');
		$user = $respond->getGraphUser();
	}
} catch (Exception $exception) {
	echo $exception;
}
