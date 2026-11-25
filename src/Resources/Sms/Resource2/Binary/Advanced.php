<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Sms\Resource2\Binary;

final class Advanced extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/sms/2/binary/advanced',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N33e5f9b198702dad16ca1f81c1bb567a11b08d145013a25f78031b56a52d656b\\SMSResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N7b23cc7ec456214e90b61e3d5abd3aaf7422ea4b20f1cdd2d4e9c44fbceaf035\\SMSAdvancedBinaryRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send binary SMS message
     *
     * Send single or multiple binary messages to one or more destination address. The API response will not contain the final delivery status, use [Delivery Reports](https://www.infobip.com/docs/api/channels/sms/sms-messaging/logs-and-status-reports/receive-outbound-sms-message-report) instead.\
     * In light of improved features, this endpoint has been superseded. Please visit [Send SMS message](#channels/sms/send-sms-messages) for the next version.
     * Documentation: https://www.infobip.com/docs/sms
     */
    public function post(\InfobipSDK\DTOs\N7b23cc7ec456214e90b61e3d5abd3aaf7422ea4b20f1cdd2d4e9c44fbceaf035\SMSAdvancedBinaryRequest $payload): \InfobipSDK\DTOs\N33e5f9b198702dad16ca1f81c1bb567a11b08d145013a25f78031b56a52d656b\SMSResponse
    {
        /** @var \InfobipSDK\DTOs\N33e5f9b198702dad16ca1f81c1bb567a11b08d145013a25f78031b56a52d656b\SMSResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
