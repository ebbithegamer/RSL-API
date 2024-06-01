<?php

// WHAT THIS IS + HOW TO USE!!
//
// So this is where all the epic functions will go!!
// Right now there's only the signature function which is... for signing.
// To use it, you just gotta supply the function with data and keyPath!
// Basically, $data is whatever you wanna sign and $keyPath is the PrivateKey.pem's path!!
// Here's an example if you're confused on how to use it:
// $keyPath = $baseUrl . "/Path/To/Your/PrivateKey.pem";
// $sig = signature($data, $keyPath);
// exit("--rbxsig%" . $sig . "%\r\n" . $data);

function signature($data, $keyPath) {
    $key = file_get_contents($keyPath);
    openssl_sign($data, $sig, $key, OPENSSL_ALGO_SHA1);
    return base64_encode($sig);
}
?>
