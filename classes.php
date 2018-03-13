<?php
/*
 * PHP simpleCrypt
 */
class simpleCrypt
{
    const ENC = 'aes-256-ctr';
    // Encrypt
    public static function encrypt($msg, $key)
    {
        $nce = openssl_random_pseudo_bytes(openssl_cipher_iv_length(self::ENC));
        $enc = openssl_encrypt($msg, self::ENC, $key, OPENSSL_RAW_DATA, $nce);
        return base64_encode($nce.$enc);
    }
    // Decrypt
    public static function decrypt($msg, $key)
    {
        $msg = $msg === false ? die('Encryption failure') : base64_decode($msg, true);
        $nze = openssl_cipher_iv_length(self::ENC);
        $nce = mb_substr($msg, 0, $nze, '8bit');
        return openssl_decrypt(mb_substr($msg, $nze, null, '8bit'), self::ENC, $key, OPENSSL_RAW_DATA, $nce);
    }
}
