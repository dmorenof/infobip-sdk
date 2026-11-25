<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Subscriptions\Resource1;

final class Subscription extends \InfobipSDK\Client
{
    private const array GET_BY_CHANNEL = [
        'method' => 'GET',
        'path' => '/subscriptions/1/subscription/{channel}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\SubscriptionPage',
    ];

    /**
     * Get subscriptions
     *
     * Returns a list of all subscriptions for the specified channel with pagination. By default, the result is sorted by creation date in descending order.<br>The search can be used with various criteria passed via query parameters (all criteria combinations have <strong>AND</strong> semantic).<br><strong>Note.</strong>To avoid validation errors and inconsistent results query parameters need to be encoded  (see <strong>RFC 3986, section 2.1</strong>).<br><strong>Example</strong>. Find subscriptions having applications 'app1' and 'app2', and the resource '100200300400'.<pre>/subscriptions/1/subscription/SMS?applicationId=app1&applicationId=app2&resource=100200300400</pre>
     */
    public function getByChannel(\InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SubscriptionChannel $channel, ?\InfobipSDK\GetParams\Subscriptions\Resource1\Subscription\ByChannel $params = null): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SubscriptionPage
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SubscriptionPage $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CHANNEL), path: ['channel' => $channel], parameters: $params);
        return $result;
    }

    private const array POST_BY_CHANNEL = [
        'method' => 'POST',
        'path' => '/subscriptions/1/subscription/{channel}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\IdOnlySubscriptionResponse',
        'responseHeaders' => [
            201 => [
                'Location' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\OneOfSubscriptionRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create subscription
     *
     * This method will create a new subscription. You can provide an ID of an existing profile, or submit a full definition of a profile and security settings if you want to create new ones.
     */
    public function postByChannel(\InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SubscriptionChannel $channel, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\OneOfSubscriptionRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySubscriptionResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySubscriptionResponse $result */
        $result = $this->executeBody(self::operation(self::POST_BY_CHANNEL), $payload, path: ['channel' => $channel]);
        return $result;
    }
}
