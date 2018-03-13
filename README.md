# PHP simpleCrypt
Simple PHP Encryption &amp; Decryption using OpenSSL & AES-256-CTR.

PHP simpleCrypt is an easy to use PHP class that provides two-way encryption with a key. After encrypting using OpenSSL and AES256, it will output a string in base64.

# Example Usage
// Include class file containing PHP simpleCrypt

include("classes.php");


// Encryption key

$key = hex2bin("551dcc56cef122e6159d50e3a9c3ae577cfbf1392efeec33acae3cf32898fa34");


// Encryption

$msg = "Hello world."; // String to be encrypted 

$enc = simpleCrypt::encrypt($msg, $key);


// Decryption

$dec = simpleCrypt::decrypt($enc, $key);


// Example Output

echo $enc." decrypted is ".$dec;

# Example Output
wJFdwUlZ9qJLGQDhHrA0RVxpiAG/dwPpbk8jbQ== decrypted is Hello world.
