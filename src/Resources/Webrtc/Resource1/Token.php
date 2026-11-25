<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Webrtc\Resource1;

final class Token extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/webrtc/1/token',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
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
        'responseType' => '\\InfobipSDK\\DTOs\\A012797e45a148c14a09b350fd3670874eb3f365931c630a0c2efc32c7293ff3\\TokenResponseModel',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\A012797e45a148c14a09b350fd3670874eb3f365931c630a0c2efc32c7293ff3\\TokenRequestModel',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Generate WebRTC Token
     *
     * This endpoint allows you to generate token for WebRTC channel.
     */
    public function post(\InfobipSDK\DTOs\A012797e45a148c14a09b350fd3670874eb3f365931c630a0c2efc32c7293ff3\TokenRequestModel $payload): \InfobipSDK\DTOs\A012797e45a148c14a09b350fd3670874eb3f365931c630a0c2efc32c7293ff3\TokenResponseModel
    {
        /** @var \InfobipSDK\DTOs\A012797e45a148c14a09b350fd3670874eb3f365931c630a0c2efc32c7293ff3\TokenResponseModel $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
