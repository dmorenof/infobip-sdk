<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ccaas\Voice\Resource2;

final class AccountRecordingConfig extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/ccaas/voice/2/account-recording-config',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
        'responseType' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\AccountRecordingConfigApiModel',
    ];

    /**
     * Get account recording configuration
     *
     * Use this method to retrieve the account recording configuration. <a href="https://www.infobip.com/docs/conversations/calls#recording-set-up-calls" target="_blank">More info</a>.
     */
    public function get(): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountRecordingConfigApiModel
    {
        /** @var \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountRecordingConfigApiModel $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/ccaas/voice/2/account-recording-config',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\StatusResponse',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\StatusResponse',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\AccountRecordingConfigApiModel',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\AccountRecordingConfigApiModel',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create account recording configuration
     *
     * Use this method to create an account recording configuration. <a href="https://www.infobip.com/docs/conversations/calls#recording-set-up-calls" target="_blank">More info</a>.
     */
    public function post(\InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountRecordingConfigApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountRecordingConfigApiModel
    {
        /** @var \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountRecordingConfigApiModel $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/ccaas/voice/2/account-recording-config',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\StatusResponse',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\StatusResponse',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\AccountRecordingConfigApiModel',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\AccountRecordingConfigApiModel',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update account recording configuration
     *
     * Use this method to create or update an account recording configuration. <a href="https://www.infobip.com/docs/conversations/calls#recording-set-up-calls" target="_blank">More info</a>.
     */
    public function put(\InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountRecordingConfigApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountRecordingConfigApiModel
    {
        /** @var \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountRecordingConfigApiModel $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload);
        return $result;
    }

}
