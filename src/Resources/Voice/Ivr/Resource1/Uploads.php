<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Voice\Ivr\Resource1;

final class Uploads extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/voice/ivr/1/uploads',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\Fe7c4f0f74cadd174aef8cfae4332aff0f6a242321909295ef2872307010670d\\IvrFileResponsePage',
    ];

    /**
     * Get files
     *
     * Get files with pagination. Maximum number of pages is 100.
     *
     * @deprecated
     */
    public function get(?\InfobipSDK\GetParams\Voice\Ivr\Resource1\Uploads $params = null): \InfobipSDK\DTOs\Fe7c4f0f74cadd174aef8cfae4332aff0f6a242321909295ef2872307010670d\IvrFileResponsePage
    {
        /** @var \InfobipSDK\DTOs\Fe7c4f0f74cadd174aef8cfae4332aff0f6a242321909295ef2872307010670d\IvrFileResponsePage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/voice/ivr/1/uploads',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\File',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'file' => [
                'contentType' => null,
                'filename' => 'file.bin',
            ],
        ],
    ];

    /**
     * Upload file
     *
     * Upload an audio file to be played in IVR calls. The file will be removed if it is not used for 90 days. Supported formats: `.wav` and `.mp3`.
     *
     * @deprecated
     */
    public function post(?\InfobipSDK\Requests\Voice\Ivr\Resource1\Uploads\Post $payload = null): \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\File
    {
        /** @var \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\File $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

}
