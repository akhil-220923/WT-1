<?php
require 'config.php';

if (!isset($_GET['code']) || !isset($_GET['state'])) {
    die("Invalid request");
}

if ($_GET['state'] !== $_SESSION['oauth_state']) {
    die("State mismatch");
}

$code = $_GET['code'];

$token_url = "https://github.com/login/oauth/access_token";

$post_data = [
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'code' => $code,
    'redirect_uri' => $redirect_uri
];

$ch = curl_init($token_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json']);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

if (!isset($data['access_token'])) {
    die("Access token not received");
}

$access_token = $data['access_token'];

$user_url = "https://api.github.com/user";

$ch = curl_init($user_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: token $access_token",
    "User-Agent: PHP-App"
]);

$user_response = curl_exec($ch);
curl_close($ch);

$user_data = json_decode($user_response, true);

$_SESSION['github_user'] = $user_data;

header("Location: index.php");
exit();
