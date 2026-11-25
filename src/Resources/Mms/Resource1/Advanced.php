<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Mms\Resource1;

final class Advanced extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mms/1/advanced',
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
            400 => '\\InfobipSDK\\DTOs\\N8c0d480c425c41d88986e9a339e209ff8333292c731a8b410c00a517bc3a95fb\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8c0d480c425c41d88986e9a339e209ff8333292c731a8b410c00a517bc3a95fb\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Ce93fb2fe51c89086b5064c5562c417f51be44b14f40606d3932f527a3fd02d9\\SendResult',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Ce93fb2fe51c89086b5064c5562c417f51be44b14f40606d3932f527a3fd02d9\\MmsAdvancedRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send MMS message
     *
     * This method allows you to send one MMS or bulk MMS to a recipient or multiple recipients in one request.
     * Documentation: https://www.infobip.com/docs/mms
     *
     * @deprecated
     */
    public function post(\InfobipSDK\DTOs\Ce93fb2fe51c89086b5064c5562c417f51be44b14f40606d3932f527a3fd02d9\MmsAdvancedRequest $payload): \InfobipSDK\DTOs\Ce93fb2fe51c89086b5064c5562c417f51be44b14f40606d3932f527a3fd02d9\SendResult
    {
        /** @var \InfobipSDK\DTOs\Ce93fb2fe51c89086b5064c5562c417f51be44b14f40606d3932f527a3fd02d9\SendResult $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
