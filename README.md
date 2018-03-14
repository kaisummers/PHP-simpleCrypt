# PHP-simpleCrypt
Simple PHP Encryption &amp; Decryption using OpenSSL & AES256.

PHP-simpleCrypt is an easy to use PHP Encryption & Decryption class. It provides a two-way cryptographic implementation. After encrypting your data with a key, using OpenSSL and AES-256-CTR, it will output a string in base64.

# Example Usage
// Include class file containing PHP simpleCrypt

include("classes.php");


// Encryption key

$key = hex2bin("706c656173652063686f6f73652061626f75742074656e2072616e646f6d207365656420776f72647320656e636f64656420696e20686578");


// Encryption

$msg = "Hello world."; // String to be encrypted 

$crypt = new simpleCrypt();

$enc = $crypt->encrypt($msg, $key);


// Decryption

$dec = $crypt->decrypt($enc, $key);


// Example Output

echo $enc." decrypted is ".$dec;

# Example Output
csRagS9zHUXOrwKVXVkbKF6bZArE2pnXRMrc+g== decrypted is Hello world.
