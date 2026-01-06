<?php
const SECRET_KEY = 'SUPER_TAJNY_KLUCZ_ZMIEN_TO';

function encryptData($data) {
    $iv = random_bytes(16);
    $encrypted = openssl_encrypt(
        $data,
        'AES-256-CBC',
        SECRET_KEY,
        0,
        $iv
    );
    return base64_encode($iv . $encrypted);
}

function decryptData($data) {
    $data = base64_decode($data);
    $iv = substr($data, 0, 16);
    $encrypted = substr($data, 16);
    return openssl_decrypt(
        $encrypted,
        'AES-256-CBC',
        SECRET_KEY,
        0,
        $iv
    );
}
