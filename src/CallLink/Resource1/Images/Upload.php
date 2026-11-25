<?php

declare(strict_types=1);

namespace InfobipSDK\CallLink\Resource1\Images;

final class Upload extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /call-link/1/images/upload/{type} [operationId: upload-image] */
    /**
     * Upload image
     *
     * Use this method to upload an image.
     */
    public static function postByType(\InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\ImageType $type, ?\InfobipSDK\Requests\CallLink\Resource1\Images\Upload\ByType\Post $payload = null): \InfobipSDK\DTOs\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582\ImageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Images\Upload::class)->postByType($type, $payload);
    }

}
