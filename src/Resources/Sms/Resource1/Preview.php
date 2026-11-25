<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Sms\Resource1;

final class Preview extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/sms/1/preview',
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
        'responseType' => '\\InfobipSDK\\DTOs\\B888d833f5e2077036527211f9d9a5502285e1c742cd8459a9d3ad85cb1fa1f5\\PreviewResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N01e84c3b4dd6fb6c49761ac60f0bbc50e5117905a6beb7547645113e59aaeb46\\PreviewRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Preview SMS message
     *
     * Avoid unpleasant surprises and check how different message configurations will affect your message text, number of characters and message parts.
     * Documentation: https://www.infobip.com/docs/sms
     */
    public function post(\InfobipSDK\DTOs\N01e84c3b4dd6fb6c49761ac60f0bbc50e5117905a6beb7547645113e59aaeb46\PreviewRequest $payload): \InfobipSDK\DTOs\B888d833f5e2077036527211f9d9a5502285e1c742cd8459a9d3ad85cb1fa1f5\PreviewResponse
    {
        /** @var \InfobipSDK\DTOs\B888d833f5e2077036527211f9d9a5502285e1c742cd8459a9d3ad85cb1fa1f5\PreviewResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
