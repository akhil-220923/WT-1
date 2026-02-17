<?php

header("Content-Type: text/plain");

// Get JSON input
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['token'])) {
    echo "No token received";
    exit;
}

$idToken = $data['token'];

// Verify token using Google API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://oauth2.googleapis.com/tokeninfo?id_token=" . $idToken);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$user = json_decode($response, true);

if (isset($user['email'])) {
    echo "✅ Backend Verified User: " . $user['email'];
} else {
    echo "❌ Invalid Token";
}

?>
