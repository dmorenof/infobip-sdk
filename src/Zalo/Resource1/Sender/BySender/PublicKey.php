<?php

declare(strict_types=1);

namespace InfobipSDK\Zalo\Resource1\Sender\BySender;

final class PublicKey extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /zalo/1/sender/{sender}/public-key [operationId: get-zalo-public-key] */
    /**
     * Get Zalo sender public key
     *
     * Returns previously generated public RSA key. In case you haven't already generated an RSA key, you need to do that using the "Create Zalo sender public key" method. To use the public RSA key, please *Base64 decode* the provided value!
     */
    public static function get(string $sender): \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\PublicKeyResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Zalo\Resource1\Sender\BySender\PublicKey::class)->get($sender);
    }

    /** POST /zalo/1/sender/{sender}/public-key [operationId: create-zalo-public-key] */
    /**
     * Create Zalo sender public key
     *
     * The RSA key generation API allows you to generate a key pair consisting of a public key and a private key.<br />Only the public key will be returned by this method. The private key will be stored by Zalo to decrypt the content.<br />In case you've already generated an RSA key, please use the public key get API to get the public key.<br />To use the public RSA key, please *Base64 decode* the provided value!
     */
    public static function post(string $sender): \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\PublicKeyResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Zalo\Resource1\Sender\BySender\PublicKey::class)->post($sender);
    }
}
