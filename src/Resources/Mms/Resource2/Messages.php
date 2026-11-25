<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Mms\Resource2;

final class Messages extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mms/2/messages',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\\ResponseEnvelopeMessageResponseMessageResponseDetails',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\\MmsUnificationRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send MMS messages
     *
     * This method allows you to send MMS messages to a recipient or multiple recipients in one request.
     * Documentation: https://www.infobip.com/docs/mms
     */
    public function post(\InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsUnificationRequest $payload): \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        /** @var \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\ResponseEnvelopeMessageResponseMessageResponseDetails $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
