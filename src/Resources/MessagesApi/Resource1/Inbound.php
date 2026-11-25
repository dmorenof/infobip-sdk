<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\MessagesApi\Resource1;

final class Inbound extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/messages-api/1/inbound',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiIncomingMessageResponse',
    ];

    /**
     * Get inbound messages
     *
     * If you are unable to receive incoming messages to the endpoint of your choice in real-time, you can use this API call to fetch messages. Each request will return a batch of received messages, only once. The API request will only return new messages that arrived since the last API request.
     * Documentation: https://www.infobip.com/docs/messages-api
     */
    public function get(\InfobipSDK\GetParams\MessagesApi\Resource1\Inbound $params): \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiIncomingMessageResponse
    {
        /** @var \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiIncomingMessageResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
