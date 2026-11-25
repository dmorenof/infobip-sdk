<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender;

final class PublicKey extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/1/senders/{sender}/public-key [operationId: get-whatsapp-sender-public-key] */
    /**
     * Get WhatsApp sender public key
     *
     * Retrieves the public key for WhatsApp encryption. The public key enables
     *             end-to-end encrypted data exchange with WhatsApp, such as in WhatsApp Flows.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function get(string $sender): \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\SenderPublicKeyResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\PublicKey::class)->get($sender);
    }

    /** POST /whatsapp/1/senders/{sender}/public-key [operationId: upload-whatsapp-sender-public-key] */
    /**
     * Upload WhatsApp sender public key
     *
     * Uploads a public key for WhatsApp encryption. The public key enables
     *             end-to-end encrypted data exchange with WhatsApp, such as in WhatsApp Flows.
     *             Previous keys are replaced when new ones are uploaded using this endpoint.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(string $sender, \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\UploadKeyApiDoc $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\PublicKey::class)->post($sender, $payload);
    }
}
