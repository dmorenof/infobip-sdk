<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Recordings;

final class Files extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /calls/1/recordings/files/{fileId} [operationId: delete-recording-file] */
    /**
     * Delete recording file
     *
     * Delete a single file from a call or conference recording. The call or conference recording metadata will still exist after deleting the file, but the file will not show up anymore in the file list of that call or conference recording.
     */
    public static function deleteByFileId(string $fileId, ?\InfobipSDK\DeleteParams\Calls\Resource1\Recordings\Files\ByFileId $params = null): \InfobipSDK\DTOs\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c\PublicRecordingFile
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Recordings\Files::class)->deleteByFileId($fileId, $params);
    }

    /** GET /calls/1/recordings/files/{fileId} [operationId: download-recording-file] */
    /**
     * Download recording file
     *
     * Download a recording file.
     */
    public static function getByFileId(string $fileId, ?\InfobipSDK\GetParams\Calls\Resource1\Recordings\Files\ByFileId $params = null): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Recordings\Files::class)->getByFileId($fileId, $params);
    }

}
