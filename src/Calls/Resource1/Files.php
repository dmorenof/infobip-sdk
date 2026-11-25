<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1;

final class Files extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/files [operationId: get-calls-files] */
    /**
     * Get audio files
     *
     * Get audio files with pagination. Maximum number of pages is 100.
     */
    public static function get(?\InfobipSDK\GetParams\Calls\Resource1\Files $params = null): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\FilePage
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Files::class)->get($params);
    }

    /** POST /calls/1/files [operationId: upload-calls-audio-file] */
    /**
     * Upload audio file
     *
     * Upload an audio file. Uploaded files can be played on calls, dialogs or conferences. The file will be removed if it is not used for 90 days.
     */
    public static function post(?\InfobipSDK\Requests\Calls\Resource1\Files\Post $payload = null): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\File
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Files::class)->post($payload);
    }

    /** DELETE /calls/1/files/{fileId} [operationId: delete-calls-file] */
    /**
     * Delete audio file
     *
     * Delete an audio file.
     */
    public static function deleteByFileId(string $fileId): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\File
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Files::class)->deleteByFileId($fileId);
    }

    /** GET /calls/1/files/{fileId} [operationId: get-calls-file] */
    /**
     * Get audio file
     *
     * Get a single audio file.
     */
    public static function getByFileId(string $fileId): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\File
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Files::class)->getByFileId($fileId);
    }
}
