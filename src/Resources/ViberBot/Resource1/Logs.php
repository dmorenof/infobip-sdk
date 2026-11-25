<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\ViberBot\Resource1;

final class Logs extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/viber-bot/1/logs',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\LogResponseLogViberBotOutboundContent',
        'querySerialization' => [
            'bulkId' => 'multi',
            'campaignReferenceId' => 'multi',
            'messageId' => 'multi',
        ],
    ];

    /**
     * Get outbound Viber bot message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public function get(?\InfobipSDK\GetParams\ViberBot\Resource1\Logs $params = null): \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\LogResponseLogViberBotOutboundContent
    {
        /** @var \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\LogResponseLogViberBotOutboundContent $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
