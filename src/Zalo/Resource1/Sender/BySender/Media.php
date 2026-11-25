<?php

declare(strict_types=1);

namespace InfobipSDK\Zalo\Resource1\Sender\BySender;

final class Media extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /zalo/1/sender/{sender}/media [operationId: upload-zalo-media] */
    /**
     * Upload Zalo media
     *
     * Uploads an image file to Zalo and returns the media ID that can be referenced in template content.
     */
    public static function post(string $sender, ?\InfobipSDK\Requests\Zalo\Resource1\Sender\BySender\Media\Post $payload = null): \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\MediaUploadResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Zalo\Resource1\Sender\BySender\Media::class)->post($sender, $payload);
    }

    /** GET /zalo/1/sender/{sender}/media/{mediaId} [operationId: get-zalo-media] */
    /**
     * Get Zalo media
     *
     * Downloads a media file previously uploaded to this sender.
     */
    public static function getByMediaId(\InfobipSDK\PathParams\Zalo\Resource1\Sender\BySender\Media\ByMediaId $identifier): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\InfobipSDK\Resources\Zalo\Resource1\Sender\BySender\Media::class)->getByMediaId($identifier);
    }
}
