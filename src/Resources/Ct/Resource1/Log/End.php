<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ct\Resource1\Log;

final class End extends \InfobipSDK\Client
{
    private const array POST_BY_MESSAGE_ID = [
        'method' => 'POST',
        'path' => '/ct/1/log/end/{messageId}',
        'security' => [
            [
                'Basic' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '4XX' => '\\InfobipSDK\\DTOs\\Afc47ed3ecce0d042db7648b2699b209de7fd712b3df90ffbf75e4058f683890\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '5XX' => '\\InfobipSDK\\DTOs\\Afc47ed3ecce0d042db7648b2699b209de7fd712b3df90ffbf75e4058f683890\\ApiException',
        ],
        'errorResponses' => [
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
            '4XX' => [
                'type' => '\\InfobipSDK\\DTOs\\Afc47ed3ecce0d042db7648b2699b209de7fd712b3df90ffbf75e4058f683890\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '5XX' => [
                'type' => '\\InfobipSDK\\DTOs\\Afc47ed3ecce0d042db7648b2699b209de7fd712b3df90ffbf75e4058f683890\\ApiException',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Responses\\Ct\\Resource1\\Log\\End\\ByMessageId\\Post\\EndByMessageIdResponse',
    ];

    /**
     * Confirm conversion
     *
     * Use this endpoint to inform the Infobip platform about the successful conversion on your side. Infobip will use this information to monitor SMS performance and provide you with better service. To enable Conversion Tracking, set up the “tracking” object to “SMS” when [sending a message](https://www.infobip.com/docs/api/channels/sms/sms-messaging/outbound-sms) over HTTP API.
     * For more information, see: [Tracking Conversion](https://www.infobip.com/docs/sms/api#track-conversion).
     */
    public function postByMessageId(string $messageId): \InfobipSDK\Responses\Ct\Resource1\Log\End\ByMessageId\Post\EndByMessageIdResponse
    {
        /** @var \InfobipSDK\Responses\Ct\Resource1\Log\End\ByMessageId\Post\EndByMessageIdResponse $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_MESSAGE_ID), path: ['messageId' => $messageId]);
        return $result;
    }

}
