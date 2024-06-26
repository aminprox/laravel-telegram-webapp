<?php

namespace Micromagicman\TelegramWebApp\Util;

/**
 * Service with util methods for cryptography
 */
class Crypto
{
    /**
     * SHA256 hashing algorithm name for {@link hash_hmac} function
     */
    public const SHA_256_ALGORITHM = 'sha256';

    /**
     * Generate a SHA256 hash value
     * @param bool $binary - When set to true, outputs raw binary data. false outputs lowercase hexits
     */
    public function hmacSHA256( string $plainText, string $key, bool $binary = false ): string
    {
        return hash_hmac( self::SHA_256_ALGORITHM, $plainText, $key, $binary );
    }
}