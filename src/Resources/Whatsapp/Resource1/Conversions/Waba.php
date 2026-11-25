<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Whatsapp\Resource1\Conversions;

final class Waba extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/whatsapp/1/conversions/waba',
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
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
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
            404 => [
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
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N52c80a2bd29a734b52d9eb3ddb9b5d8ef0cb7c55640245f275763458f4c36a60\\WABAConversionEventRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Submit WABA conversions
     *
     * Submit WhatsApp conversion events using your WhatsApp Business Account (WABA) phone number as the source. Each conversion event is linked to an ad click via ctwaClickId — a unique identifier contained within the inbound WhatsApp message originating from the ad. You can optionally include conversion details such as value and currency, and a conversion timestamp (up to 7 days in the past). Events are submitted in batches of up to 1,000 and are indivisible — either all are submitted or none.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function post(\InfobipSDK\DTOs\N52c80a2bd29a734b52d9eb3ddb9b5d8ef0cb7c55640245f275763458f4c36a60\WABAConversionEventRequest $payload): void
    {
        $this->executeBody(self::operation(self::POST), $payload);
        return;
    }

}
