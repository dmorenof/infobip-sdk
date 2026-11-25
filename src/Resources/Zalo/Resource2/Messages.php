<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Zalo\Resource2;

final class Messages extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/zalo/2/messages',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ResponseEnvelopeMessageResponseMessageResponseDetails',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send Zalo messages
     *
     * Send messages to multiple recipients. Only [template messages](https://www.infobip.com/docs/zalo/message-types) registered with Zalo can be sent. The API response will not contain the final delivery status, use [Delivery Reports](/docs/api/channels/zalo/zalo-logs-and-status-reports/receive-outbound-zalo-delivery-reports) instead.
     * Documentation: https://www.infobip.com/docs/zalo
     */
    public function post(\InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloRequest $payload): \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        /** @var \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ResponseEnvelopeMessageResponseMessageResponseDetails $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
