<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Subscriptions\Resource1;

final class Profiles extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/subscriptions/1/profiles',
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
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\ProfilePage',
    ];

    /**
     * Get notification profiles
     *
     * Returns a list of all notification profiles for your account with pagination.
     */
    public function get(?\InfobipSDK\GetParams\Subscriptions\Resource1\Profiles $params = null): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfilePage
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfilePage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/subscriptions/1/profiles',
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
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\IdOnlyProfileResponse',
        'responseHeaders' => [
            201 => [
                'Location' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\ProfileRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create notification profile
     *
     * This method will create a new notification profile. You can provide an ID of existing security settings if you wish to reuse them or submit full definition, if you want to create a new one.
     */
    public function post(\InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfileRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyProfileResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyProfileResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_PROFILE_ID = [
        'method' => 'DELETE',
        'path' => '/subscriptions/1/profiles/{profileId}',
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
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\IdOnlyProfileResponse',
    ];

    /**
     * Delete notification profile
     *
     * This method will delete a notification profile specified by ID.
     */
    public function deleteByProfileId(string $profileId): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyProfileResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyProfileResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_PROFILE_ID), path: ['profileId' => $profileId]);
        return $result;
    }

    private const array GET_BY_PROFILE_ID = [
        'method' => 'GET',
        'path' => '/subscriptions/1/profiles/{profileId}',
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
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\ProfileResponse',
    ];

    /**
     * Get single notification profile
     *
     * Returns a specific notification profile by ID.
     */
    public function getByProfileId(string $profileId): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfileResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfileResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PROFILE_ID), path: ['profileId' => $profileId]);
        return $result;
    }

    private const array PUT_BY_PROFILE_ID = [
        'method' => 'PUT',
        'path' => '/subscriptions/1/profiles/{profileId}',
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
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\IdOnlyProfileResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\NoIdProfileRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update notification profile
     *
     * This method allows you to update a notification profile. You can change its properties and provide an ID of security settings if you wish to change them.
     */
    public function putByProfileId(string $profileId, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\NoIdProfileRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyProfileResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyProfileResponse $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_PROFILE_ID), $payload, path: ['profileId' => $profileId]);
        return $result;
    }

}
