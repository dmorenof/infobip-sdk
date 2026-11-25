<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\CallLink\Resource1\Images;

final class Upload extends \InfobipSDK\Client
{
    private const array POST_BY_TYPE = [
        'method' => 'POST',
        'path' => '/call-link/1/images/upload/{type}',
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
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
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
            404 => [
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
        'responseType' => '\\InfobipSDK\\DTOs\\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582\\ImageResponse',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'file' => [
                'contentType' => null,
                'filename' => 'file.bin',
            ],
        ],
    ];

    /**
     * Upload image
     *
     * Use this method to upload an image.
     */
    public function postByType(\InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\ImageType $type, ?\InfobipSDK\Requests\CallLink\Resource1\Images\Upload\ByType\Post $payload = null): \InfobipSDK\DTOs\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582\ImageResponse
    {
        /** @var \InfobipSDK\DTOs\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582\ImageResponse $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_TYPE), path: ['type' => $type], body: $payload);
        return $result;
    }
}
