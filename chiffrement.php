<?php
function encrypt($message) {
    $output = "";
    $methode = "AES-256-CBC";
    $secret_key = "MotDePasse";
    $secret_iv = "VecteurInit";

    $key = $secret_key; // hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    $output = base64_encode(openssl_encrypt($message, $methode, $key, 0, $iv));

    return $output;
}

function decrypt($message) {
    $output = "";
    $methode = "AES-256-CBC";
    $secret_key = "MotDePasse";
    $secret_iv = "VecteurInit";

    $key = $secret_key; // hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    $output = openssl_decrypt(base64_decode($message), $methode, $key, 0, $iv);

    return $output;
}

echo encrypt("Bonjour tout le monde");
echo "\n";
echo decrypt("MG9uVXk5WU5pZUlhdU5yN1ZUbUZrMW1MdlR4VWJJUEJoaDVhbWIxM2hWTT0=");
echo "\n";