<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Sms\Resource1\Inbox;

final class Reports extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/sms/1/inbox/reports',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\Cd5e571e477c0b81ca50ad592cf9f67cc32feded2012ec26d7fae09c0c2d5108\\SmsMoReportResponse',
    ];

    /**
     * Get inbound SMS messages
     *
     * If you are unable to receive incoming SMS to the endpoint of your choice in real-time, you can use this API call to fetch messages. Each request will return a batch of received messages, only once. The API request will only return new messages that arrived since the last API request. To use this method, you’d need to:<ol><li><a href="https://www.infobip.com/docs/api/platform/numbers/phone-numbers/purchase-number">Buy a number</a> capable of receiving SMS traffic.</li><li>Specify a forwarding endpoint for the number and optionally configure other <a href="https://www.infobip.com/docs/api/platform/numbers/my-numbers/resource-management/manage-inbound-configuration">inbound settings</a>.</li></ol>
     */
    public function get(?\InfobipSDK\GetParams\Sms\Resource1\Inbox\Reports $params = null): \InfobipSDK\DTOs\Cd5e571e477c0b81ca50ad592cf9f67cc32feded2012ec26d7fae09c0c2d5108\SmsMoReportResponse
    {
        /** @var \InfobipSDK\DTOs\Cd5e571e477c0b81ca50ad592cf9f67cc32feded2012ec26d7fae09c0c2d5108\SmsMoReportResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
