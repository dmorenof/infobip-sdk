<?php

declare(strict_types=1);

namespace InfobipSDK\Webrtc\Resource1\Files\ById;

final class Download extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /webrtc/1/files/{id}/download [operationId: download-file] */
    /**
     * Download file
     *
     * Use this method to download a file.
     */
    public static function get(string $id): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\Files\ById\Download::class)->get($id);
    }
}
