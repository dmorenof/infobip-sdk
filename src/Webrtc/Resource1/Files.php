<?php

declare(strict_types=1);

namespace InfobipSDK\Webrtc\Resource1;

final class Files extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /webrtc/1/files [operationId: get-files] */
    /**
     * Get files
     *
     * Use this method to get files with pagination.
     */
    public static function get(?\InfobipSDK\GetParams\Webrtc\Resource1\Files $params = null): \InfobipSDK\DTOs\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\FilePageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\Files::class)->get($params);
    }

    /** DELETE /webrtc/1/files/{id} [operationId: delete-file] */
    /**
     * Delete file
     *
     * Use this method to delete a file.
     */
    public static function deleteById(string $id): \InfobipSDK\DTOs\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\FileResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\Files::class)->deleteById($id);
    }

    /** GET /webrtc/1/files/{id} [operationId: get-file] */
    /**
     * Get file
     *
     * Use this method to get a single file.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\FileResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\Files::class)->getById($id);
    }
}
