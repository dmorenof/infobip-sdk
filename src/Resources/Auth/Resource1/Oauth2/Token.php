<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Auth\Resource1\Oauth2;

final class Token extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/auth/1/oauth2/token',
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '4XX' => '\\InfobipSDK\\DTOs\\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f\\OAuthApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '5XX' => '\\InfobipSDK\\DTOs\\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f\\OAuthApiException',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '4XX' => [
                'type' => '\\InfobipSDK\\DTOs\\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f\\OAuthApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '5XX' => [
                'type' => '\\InfobipSDK\\DTOs\\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f\\OAuthApiException',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f\\TokenResponse',
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Create OAuth2 token
     *
     * Generate OAuth2 access token that can later on be used to authenticate other Infobip API calls.
     */
    public function post(?\InfobipSDK\DTOs\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f\TokenRequest $payload = null): \InfobipSDK\DTOs\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f\TokenResponse
    {
        /** @var \InfobipSDK\DTOs\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f\TokenResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

}
