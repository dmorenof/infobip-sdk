<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender;

final class Media extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /whatsapp/1/senders/{sender}/media [operationId: delete-whatsapp-media] */
    /**
     * Delete media
     *
     * Delete WhatsApp media. May be outbound or inbound media.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function delete(string $sender, \InfobipSDK\DTOs\N43838506232bad6c43fa70e5764e200c02c98fad735eeaad33d3b47abc8da5d2\UrlDeletionRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Media::class)->delete($sender, $payload);
    }

    /** GET /whatsapp/1/senders/{sender}/media/{mediaId} [operationId: download-whatsapp-inbound-media] */
    /**
     * Download inbound media
     *
     * Download WhatsApp media sent by end-users.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function getByMediaId(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Media\ByMediaId $identifier): string
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Media::class)->getByMediaId($identifier);
    }

    /** HEAD /whatsapp/1/senders/{sender}/media/{mediaId} [operationId: get-whatsapp-media-metadata] */
    /**
     * Get media metadata
     *
     * Get metadata of WhatsApp media sent by end-users to check media type and the size of a file without downloading the content.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function headByMediaId(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Media\ByMediaId $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Media::class)->headByMediaId($identifier);
    }

}
