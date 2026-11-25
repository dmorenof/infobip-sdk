<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Sms\Resource2\Text;

final class Advanced extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/sms/2/text/advanced',
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
            'type' => '\\InfobipSDK\\DTOs\\N1612e6f124bb6c5b1f4f7b12ca64104d59fdfdf779c97454e478b219583b9d48\\SMSAdvancedTextualRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send SMS message
     *
     * Use this endpoint to send an SMS and set up a rich set of features, such as batch sending with a single API request, scheduling, URL tracking, language and transliteration configuration, etc. The API response will not contain the final delivery status, use [Delivery Reports](https://www.infobip.com/docs/api/channels/sms/sms-messaging/logs-and-status-reports/receive-outbound-sms-message-report) instead.\
     * In light of improved features, this endpoint has been superseded. Please visit [Send SMS message](#channels/sms/send-sms-messages) for the next version.
     * Documentation: https://www.infobip.com/docs/sms
     */
    public function post(\InfobipSDK\DTOs\N1612e6f124bb6c5b1f4f7b12ca64104d59fdfdf779c97454e478b219583b9d48\SMSAdvancedTextualRequest $payload): \InfobipSDK\DTOs\N33e5f9b198702dad16ca1f81c1bb567a11b08d145013a25f78031b56a52d656b\SMSResponse
    {
        /** @var \InfobipSDK\DTOs\N33e5f9b198702dad16ca1f81c1bb567a11b08d145013a25f78031b56a52d656b\SMSResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
