<?php
// include your composer dependencies
require __DIR__ . '/../vendor/autoload.php';

$client = new Google_Client();
$client->useApplicationDefaultCredentials();

$client->addScope("https://www.googleapis.com/auth/userinfo.email");
$client->addScope("https://www.googleapis.com/auth/userinfo.profile");
$client->addScope("openid");

$redirect_uri = 'http://' . $_SERVER['HTTP_HOST'];
$client->setRedirectUri($redirect_uri);
?>
