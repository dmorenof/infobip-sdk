<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Sms\Resource1;

final class Bulks extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/sms/1/bulks',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N2e05f28ea1ad0c8ab6683b6adca8c2dc53bf0d4883946379aef59ba8417e5029\\BulkResponse',
    ];

    /**
     * Get scheduled SMS messages
     *
     * See all [scheduled messages](https://www.infobip.com/docs/sms/sms-over-api#schedule-sms) and their scheduled date and time. To schedule a message, use the `sendAt` field when [sending a message](#channels/sms/sms-messaging/outbound-sms/send-sms-messages).
     * Documentation: https://www.infobip.com/docs/sms
     */
    public function get(\InfobipSDK\GetParams\Sms\Resource1\Bulks $params): \InfobipSDK\DTOs\N2e05f28ea1ad0c8ab6683b6adca8c2dc53bf0d4883946379aef59ba8417e5029\BulkResponse
    {
        /** @var \InfobipSDK\DTOs\N2e05f28ea1ad0c8ab6683b6adca8c2dc53bf0d4883946379aef59ba8417e5029\BulkResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/sms/1/bulks',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N2e05f28ea1ad0c8ab6683b6adca8c2dc53bf0d4883946379aef59ba8417e5029\\BulkResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N2e05f28ea1ad0c8ab6683b6adca8c2dc53bf0d4883946379aef59ba8417e5029\\BulkRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Reschedule SMS messages
     *
     * Change the date and time of already [scheduled messages](https://www.infobip.com/docs/sms/sms-over-api#schedule-sms). To schedule a message, use the `sendAt` field when [sending a message](#channels/sms/sms-messaging/outbound-sms/send-sms-messages).
     * Documentation: https://www.infobip.com/docs/sms
     */
    public function put(\InfobipSDK\PutParams\Sms\Resource1\Bulks $params): \InfobipSDK\DTOs\N2e05f28ea1ad0c8ab6683b6adca8c2dc53bf0d4883946379aef59ba8417e5029\BulkResponse
    {
        /** @var \InfobipSDK\DTOs\N2e05f28ea1ad0c8ab6683b6adca8c2dc53bf0d4883946379aef59ba8417e5029\BulkResponse $result */
        $result = $this->executeArguments(self::operation(self::PUT), parameters: $params);
        return $result;
    }

}
