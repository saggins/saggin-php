<?php 

require_once __DIR__.'/vendor/autoload.php';


$client = new Google_Client();
$client->setAuthConfigFile('client_secrets.json');
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php');
$client->addScope("email");
$client->addScope("profile");
$client->addScope("openid");


if (! isset($_GET['code'])) {
    $auth_url = $client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
  } else { // add anti request forgery
    $client->authenticate($_GET['code']);

    // https://developers.google.com/identity/protocols/oauth2/openid-connect
    $_SESSION['access_token'] = $client->getAccessToken();
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/register';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
  }
?>
