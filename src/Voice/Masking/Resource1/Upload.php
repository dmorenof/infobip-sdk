<?php

declare(strict_types=1);

namespace InfobipSDK\Voice\Masking\Resource1;

final class Upload extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /voice/masking/1/upload [operationId: upload-audio-files] */
    /**
     * Upload audio files
     *
     * This method allows uploading audio files that can be used on the Infobip Voice platform. The method accepts either a URL or a Base64-encoded audio file in the request body. Providing both or neither will cause the request to be rejected. The file will be removed if it is not used for 90 days.
     *
     * @deprecated
     */
    public static function post(\InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\UploadBody $payload): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\UploadResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Masking\Resource1\Upload::class)->post($payload);
    }

}
