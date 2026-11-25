<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Whatsapp\Resource1\EmbeddedSignup\Registrations\BusinessAccount\ByBusinessAccountId;

final class Senders extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/whatsapp/1/embedded-signup/registrations/business-account/{businessAccountId}/senders',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\\WhatsAppSenderRegistrationResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\\PhoneNumberRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Add WhatsApp sender
     *
     * Add a WhatsApp sender to your WhatsApp Business Account and initiate the verification process. If the sender is recognized as already verified, it will be automatically submitted for registration.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function post(int $businessAccountId, \InfobipSDK\DTOs\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\PhoneNumberRequest $payload): \InfobipSDK\DTOs\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\WhatsAppSenderRegistrationResponse
    {
        /** @var \InfobipSDK\DTOs\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\WhatsAppSenderRegistrationResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['businessAccountId' => $businessAccountId]);
        return $result;
    }
}
