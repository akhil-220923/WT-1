<?php
require 'config.php';

$params = [
    'client_id' => $client_id,
    'redirect_uri' => $redirect_uri,
    'scope' => 'user',
    'state' => bin2hex(random_bytes(16))
];

$_SESSION['oauth_state'] = $params['state'];

$url = "https://github.com/login/oauth/authorize?" . http_build_query($params);

header("Location: $url");
exit();
