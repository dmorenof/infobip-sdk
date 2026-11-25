<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Voice\Masking\Resource1;

final class Upload extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/voice/masking/1/upload',
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
            400 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\\UploadResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\\UploadBody',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Upload audio files
     *
     * This method allows uploading audio files that can be used on the Infobip Voice platform. The method accepts either a URL or a Base64-encoded audio file in the request body. Providing both or neither will cause the request to be rejected. The file will be removed if it is not used for 90 days.
     *
     * @deprecated
     */
    public function post(\InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\UploadBody $payload): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\UploadResponse
    {
        /** @var \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\UploadResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
