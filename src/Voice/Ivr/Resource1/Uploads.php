<?php

declare(strict_types=1);

namespace InfobipSDK\Voice\Ivr\Resource1;

final class Uploads extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /voice/ivr/1/uploads [operationId: ivr-upload-get-files] */
    /**
     * Get files
     *
     * Get files with pagination. Maximum number of pages is 100.
     *
     * @deprecated
     */
    public static function get(?\InfobipSDK\GetParams\Voice\Ivr\Resource1\Uploads $params = null): \InfobipSDK\DTOs\Fe7c4f0f74cadd174aef8cfae4332aff0f6a242321909295ef2872307010670d\IvrFileResponsePage
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Ivr\Resource1\Uploads::class)->get($params);
    }

    /** POST /voice/ivr/1/uploads [operationId: ivr-upload-audio-file] */
    /**
     * Upload file
     *
     * Upload an audio file to be played in IVR calls. The file will be removed if it is not used for 90 days. Supported formats: `.wav` and `.mp3`.
     *
     * @deprecated
     */
    public static function post(?\InfobipSDK\Requests\Voice\Ivr\Resource1\Uploads\Post $payload = null): \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\File
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Ivr\Resource1\Uploads::class)->post($payload);
    }
}
