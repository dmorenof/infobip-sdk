<?php

declare(strict_types=1);

namespace InfobipSDK\CallLink\Resource1\Recordings;

final class Files extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /call-link/1/recordings/files/{fileId} [operationId: download-call-link-recording] */
    /**
     * Download a recording file
     *
     * Use this method to download a recording file by its ID.
     */
    public static function getByFileId(string $fileId, ?\InfobipSDK\GetParams\CallLink\Resource1\Recordings\Files\ByFileId $params = null): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Recordings\Files::class)->getByFileId($fileId, $params);
    }

}
