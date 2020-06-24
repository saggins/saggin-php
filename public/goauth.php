<?php
// include your composer dependencies
require_once __DIR__ . '/../vendor/autoload.php';  
// create Client Request to access Google API
$client = new Google_Client();
//$client->setAuthConfig('../google-credentials.json');
$client->useApplicationDefaultCredentials();
$client->addScope("email");
$client->addScope("profile");
$client->addScope("openid");

$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php');
$client->setAccessType('offline');
$client->setApprovalPrompt("auto");
$client->setIncludeGrantedScopes(true);   // incremental auth
$auth_url = $client->createAuthUrl();
header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
?>
