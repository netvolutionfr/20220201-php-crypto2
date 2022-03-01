<?php

$motdepasse = "123456rmlsghsmflhkùgmlskfhlksùfghksghkùgkmls";

$start = microtime(true);
$hash = password_hash($motdepasse, PASSWORD_DEFAULT);
$temps = microtime(true) - $start;

echo $hash;
echo "\n";

$hash = '$2y$10$UIzrUFl8J98VKI8pBivHMOSezP9JeESGXUhiuCd20ogNVKzfXkcmW';

if (password_verify($motdepasse, $hash)) {
    echo "Mot de passe vérifié\n";
}

echo $temps;
echo "\n";
