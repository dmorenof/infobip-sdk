<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Sms\Resource1;

final class Logs extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/sms/1/logs',
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
            400 => '\\InfobipSDK\\DTOs\\N578c889dd8f68587bd351066c5c6572a98ea0c15c65b5cacb8779be90fbfbb70\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N578c889dd8f68587bd351066c5c6572a98ea0c15c65b5cacb8779be90fbfbb70\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\B41d7b140d24800c94ddcc7df92e32ab37fc7d5f310ce1050b04561c5e59a3b7\\LogsResponse',
        'querySerialization' => [
            'bulkId' => 'multi',
            'campaignReferenceId' => 'multi',
            'messageId' => 'multi',
        ],
    ];

    /**
     * Get outbound SMS message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours and you can only retrieve maximum of 1000 logs per call. See [message delivery reports](#channels/sms/get-outbound-sms-message-delivery-reports) if your use case is to verify message delivery.
     * Documentation: https://www.infobip.com/docs/sms
     *
     * @deprecated
     */
    public function get(?\InfobipSDK\GetParams\Sms\Resource1\Logs $params = null): \InfobipSDK\DTOs\B41d7b140d24800c94ddcc7df92e32ab37fc7d5f310ce1050b04561c5e59a3b7\LogsResponse
    {
        /** @var \InfobipSDK\DTOs\B41d7b140d24800c94ddcc7df92e32ab37fc7d5f310ce1050b04561c5e59a3b7\LogsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
