<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Subscriptions\Resource1\Subscription;

final class ByChannel extends \InfobipSDK\Client
{
    private const array DELETE_BY_SUBSCRIPTION_ID = [
        'method' => 'DELETE',
        'path' => '/subscriptions/1/subscription/{channel}/{subscriptionId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\IdOnlySubscriptionResponse',
    ];

    /**
     * Delete subscription
     *
     * This method will delete the subscription specified by ID.
     */
    public function deleteBySubscriptionId(\InfobipSDK\PathParams\Subscriptions\Resource1\Subscription\ByChannel\BySubscriptionId $identifier): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySubscriptionResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySubscriptionResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_SUBSCRIPTION_ID), path: $identifier);
        return $result;
    }

    private const array GET_BY_SUBSCRIPTION_ID = [
        'method' => 'GET',
        'path' => '/subscriptions/1/subscription/{channel}/{subscriptionId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\SubscriptionResponse',
    ];

    /**
     * Get single subscription
     *
     * Returns a specific subscription by ID.
     */
    public function getBySubscriptionId(\InfobipSDK\PathParams\Subscriptions\Resource1\Subscription\ByChannel\BySubscriptionId $identifier): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SubscriptionResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SubscriptionResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SUBSCRIPTION_ID), path: $identifier);
        return $result;
    }

    private const array PUT_BY_SUBSCRIPTION_ID = [
        'method' => 'PUT',
        'path' => '/subscriptions/1/subscription/{channel}/{subscriptionId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\IdOnlySubscriptionResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\OneOfNoIdSubscriptionRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update subscription
     *
     * This method allows you to update the subscription. You can change its properties and provide an ID of a profile if you wish to change it.
     */
    public function putBySubscriptionId(\InfobipSDK\PathParams\Subscriptions\Resource1\Subscription\ByChannel\BySubscriptionId $identifier, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\OneOfNoIdSubscriptionRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySubscriptionResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySubscriptionResponse $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_SUBSCRIPTION_ID), $payload, path: $identifier);
        return $result;
    }

}
