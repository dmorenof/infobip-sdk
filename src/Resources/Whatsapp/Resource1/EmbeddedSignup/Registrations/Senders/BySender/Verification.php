<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Whatsapp\Resource1\EmbeddedSignup\Registrations\Senders\BySender;

final class Verification extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/whatsapp/1/embedded-signup/registrations/senders/{sender}/verification',
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
            202,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N2d9ba0ce97cbc02fae57e41d1bc0e149a861cca6355f94de8d80841221b66e06\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N2d9ba0ce97cbc02fae57e41d1bc0e149a861cca6355f94de8d80841221b66e06\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N2d9ba0ce97cbc02fae57e41d1bc0e149a861cca6355f94de8d80841221b66e06\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N2d9ba0ce97cbc02fae57e41d1bc0e149a861cca6355f94de8d80841221b66e06\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'sender' => [
                'pattern' => '\\d+',
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\\VerifyCodeRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Verify WhatsApp sender
     *
     * Verify your WhatsApp sender and submit it for registration.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function post(string $sender, \InfobipSDK\DTOs\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\VerifyCodeRequest $payload): void
    {
        $this->executeBody(self::operation(self::POST), $payload, path: ['sender' => $sender]);
        return;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/whatsapp/1/embedded-signup/registrations/senders/{sender}/verification',
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
            202,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N2d9ba0ce97cbc02fae57e41d1bc0e149a861cca6355f94de8d80841221b66e06\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N2d9ba0ce97cbc02fae57e41d1bc0e149a861cca6355f94de8d80841221b66e06\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N2d9ba0ce97cbc02fae57e41d1bc0e149a861cca6355f94de8d80841221b66e06\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N2d9ba0ce97cbc02fae57e41d1bc0e149a861cca6355f94de8d80841221b66e06\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'sender' => [
                'pattern' => '\\d+',
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\\OtpRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Retry WhatsApp sender verification
     *
     * Retry the WhatsApp sender verification process in the event of a non-delivered verification code.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function put(string $sender, \InfobipSDK\DTOs\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\OtpRequest $payload): void
    {
        $this->executeBody(self::operation(self::PUT), $payload, path: ['sender' => $sender]);
        return;
    }

}
