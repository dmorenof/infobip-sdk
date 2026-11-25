<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Sms\Resource1\Bulks;

final class Status extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/sms/1/bulks/status',
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
            404 => '\\InfobipSDK\\DTOs\\N578c889dd8f68587bd351066c5c6572a98ea0c15c65b5cacb8779be90fbfbb70\\ApiException',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\N578c889dd8f68587bd351066c5c6572a98ea0c15c65b5cacb8779be90fbfbb70\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\B28487c847ed2327e816f04e75efdaf507ffcf1d938d91963e2ce7298453183f\\BulkStatusResponse',
    ];

    /**
     * Get scheduled SMS messages status
     *
     * See the status of [scheduled messages](https://www.infobip.com/docs/sms/sms-over-api#schedule-sms). To schedule a message, use the `sendAt` field when [sending a message](#channels/sms/sms-messaging/outbound-sms/send-sms-messages).
     * Documentation: https://www.infobip.com/docs/sms
     */
    public function get(\InfobipSDK\GetParams\Sms\Resource1\Bulks\Status $params): \InfobipSDK\DTOs\B28487c847ed2327e816f04e75efdaf507ffcf1d938d91963e2ce7298453183f\BulkStatusResponse
    {
        /** @var \InfobipSDK\DTOs\B28487c847ed2327e816f04e75efdaf507ffcf1d938d91963e2ce7298453183f\BulkStatusResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/sms/1/bulks/status',
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
            404 => '\\InfobipSDK\\DTOs\\N578c889dd8f68587bd351066c5c6572a98ea0c15c65b5cacb8779be90fbfbb70\\ApiException',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\N578c889dd8f68587bd351066c5c6572a98ea0c15c65b5cacb8779be90fbfbb70\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\B28487c847ed2327e816f04e75efdaf507ffcf1d938d91963e2ce7298453183f\\BulkStatusResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C8006fe0d154740d4f3e0ed89b54c9c54d35edf85894782dbfe7d9ae0ea23725\\UpdateStatusRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update scheduled SMS messages status
     *
     * Change the status or completely cancel sending of [scheduled messages](https://www.infobip.com/docs/sms/sms-over-api#schedule-sms). To schedule a message, use the `sendAt` field when [sending a message](#channels/sms/sms-messaging/outbound-sms/send-sms-messages).
     * Documentation: https://www.infobip.com/docs/sms
     */
    public function put(\InfobipSDK\PutParams\Sms\Resource1\Bulks\Status $params): \InfobipSDK\DTOs\B28487c847ed2327e816f04e75efdaf507ffcf1d938d91963e2ce7298453183f\BulkStatusResponse
    {
        /** @var \InfobipSDK\DTOs\B28487c847ed2327e816f04e75efdaf507ffcf1d938d91963e2ce7298453183f\BulkStatusResponse $result */
        $result = $this->executeArguments(self::operation(self::PUT), parameters: $params);
        return $result;
    }
}
