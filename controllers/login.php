<?php
require_once '../vendor/autoload.php';
include('../config/db.php');

$clientID = $_ENV['GOOGLE_CLIENT_ID'];
$clientSecret = $_ENV['GOOGLE_CLIENT_SECRET'];
$redirectUrl = $_ENV['GOOGLE_REDIRECT_URL'];

$client = new Google\Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUrl);
$client->addScope('profile');
$client->addScope('email');

if(isset($_GET['code'])){
$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
$client->setAccessToken($token);

//Getting user profile
$gauth = new Google\Service\Oauth2($client);
$google_info = $gauth->userinfo->get();
$email = $google_info->email;
$name = $google_info->name;

}
else{
    echo "<a href= '" . $client->createAuthUrl() . "'>Login with Google</a>";
}

?>