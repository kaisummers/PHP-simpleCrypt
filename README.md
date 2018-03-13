# PHP simpleCrypt
Simple PHP Encryption &amp; Decryption using OpenSSL.

PHP simpleCrypt is an easy to use PHP class that provides two-way encryption with a key.

# Example Usage
<?php
  // Include class file containing PHP simpleCrypt
  include("classes.php");

  // Encryption key
  $key = hex2bin("551dcc56cef122e6159d50e3a9c3ae577cfbf1392efeec33acae3cf32898fa34");

  // Encryption
  $msg = "The quick brown fox jumps over the lazy dog."; // String to be encrypted 
  $enc = simpleCrypt::encrypt($msg, $key);

  // Decryption
  $dec = simpleCrypt::decrypt($enc, $key);

  // Example Output
  echo "$enc<br>$dec";

# Example Output
0UpxPUAVH1c6FKa9JwcZBJciQZ2qjIUCzthTv9sthdm8HFou12eCB43pVNu1R/28pC3IscuHroBNRiP/
The quick brown fox jumps over the lazy dog.
