<?php

declare(strict_types=1);

namespace InfobipSDK\CallLink\Resource1;

final class Images extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /call-link/1/images [operationId: get-images] */
    /**
     * Get images
     *
     * Use this method to retrieve all images.
     */
    public static function get(?\InfobipSDK\GetParams\CallLink\Resource1\Images $params = null): \InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\ImagePage
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Images::class)->get($params);
    }

    /** DELETE /call-link/1/images/{id} [operationId: delete-image] */
    /**
     * Delete image
     *
     * Use this method to delete a call link configuration image.
     */
    public static function deleteById(string $id): \InfobipSDK\DTOs\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582\ImageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Images::class)->deleteById($id);
    }

    /** GET /call-link/1/images/{id} [operationId: get-image] */
    /**
     * Get image
     *
     * Use this method to get an image.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582\ImageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Images::class)->getById($id);
    }
}
