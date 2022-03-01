<?php
//print_r(hash_algos());
$hash = "";
$start = microtime(true);
$salt = bin2hex(openssl_random_pseudo_bytes(4));

$hash = hash('sha256', $salt . "123456");
$temps = microtime(true) - $start;

echo $salt;
echo "\n";
echo $hash;
echo "\n";
echo $temps;
echo "\n";
