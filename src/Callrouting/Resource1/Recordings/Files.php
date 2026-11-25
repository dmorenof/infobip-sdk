<?php

declare(strict_types=1);

namespace InfobipSDK\Callrouting\Resource1\Recordings;

final class Files extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /callrouting/1/recordings/files/{fileId} [operationId: recording-file-download] */
    /**
     * Download recording file
     *
     * Download a recording file.
     */
    public static function getByFileId(string $fileId, ?\InfobipSDK\GetParams\Callrouting\Resource1\Recordings\Files\ByFileId $params = null): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\InfobipSDK\Resources\Callrouting\Resource1\Recordings\Files::class)->getByFileId($fileId, $params);
    }
}
