<?php

declare(strict_types=1);

namespace InfobipSDK\Markuplanguage\Resource1\Recordings;

final class Files extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /markuplanguage/1/recordings/files/{fileId} [operationId: get-markup-recording-file] */
    /**
     * Download recording file
     *
     * Download a Calls Markup Language recording file.
     */
    public static function getByFileId(string $fileId, ?\InfobipSDK\GetParams\Markuplanguage\Resource1\Recordings\Files\ByFileId $params = null): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\InfobipSDK\Resources\Markuplanguage\Resource1\Recordings\Files::class)->getByFileId($fileId, $params);
    }

}
