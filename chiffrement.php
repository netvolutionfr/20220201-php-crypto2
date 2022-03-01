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
echo decrypt("STF6ZUk5ZkZ0bjlSMW5CWDNCQWVrRGgxdEMyNEIwZDFWYlFLRTZpM1dFND0=");
echo "\n";