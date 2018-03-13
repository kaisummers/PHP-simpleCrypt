# PHP-simpleCrypt
Simple PHP Encryption &amp; Decryption using OpenSSL & AES-256-CTR.

PHP-simpleCrypt is an easy to use PHP Encryption & Decryption class. It provides a two-way cryptographic implementation. After encrypting your data with a key, using OpenSSL and AES256, it will output a string in base64.

# Example Usage
// Include class file containing PHP simpleCrypt

include("classes.php");


// Encryption key

$key = hex2bin("551dcc56cef122e6159d50e3a9c3ae577cfbf1392efeec33acae3cf32898fa34");


// Encryption

$msg = "Hello world."; // String to be encrypted 

$crypt = new simpleCrypt();

$enc = $crypt->encrypt($msg, $key);


// Decryption

$dec = $crypt->decrypt($enc, $key);


// Example Output

echo $enc." decrypted is ".$dec;

# Example Output
Ylb7PnDPP68Z7Q4LXV8XSHC6AMb5a3lvtF2aRw== decrypted is Hello world.
