<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Messenger\Resource1;

final class Messages extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/messenger/1/messages',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\ResponseEnvelopeMessageResponseMessageResponseDetails',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send a Messenger message
     *
     * Send one or more messages to multiple recipients. <br/> Marketing messages on Messenger are no longer available for new users. For existing users, this feature will be deprecated on January 12, 2026. After this date, marketing messages will fail with an error.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public function post(\InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookRequest $payload): \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        /** @var \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\ResponseEnvelopeMessageResponseMessageResponseDetails $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
