<?php
/*
 * PHP-simpleCrypt
 */
class simpleCrypt
{
    const ENC = 'aes-256-ctr';
    // Encrypt
    public static function encrypt($d, $k)
    {
        $n = openssl_random_pseudo_bytes(openssl_cipher_iv_length(self::ENC));
        return base64_encode($n.openssl_encrypt($d, self::ENC, $k, OPENSSL_RAW_DATA, $n));
    }
    // Decrypt
    public static function decrypt($d, $k)
    {
        $d = $d === false ? die('Encryption failure') : base64_decode($d, true);
        $n = openssl_cipher_iv_length(self::ENC);
        return openssl_decrypt(mb_substr($d, $n, null, '8bit'), self::ENC, $k, OPENSSL_RAW_DATA, mb_substr($d, 0, $n, '8bit'));
    }
}
