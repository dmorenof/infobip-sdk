<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ccaas\Voice\Resource2;

final class AccountWrapUpConfig extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/ccaas/voice/2/account-wrap-up-config',
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
        'responseType' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\AccountWrapUpApiModel',
    ];

    /**
     * Get account wrap up configuration
     *
     * Use this method to retrieve the current account wrap up configuration. Wrap up is the time after a call during which an agent's status is still BUSY. Default wrap up time is 30 seconds. <a href="https://www.infobip.com/docs/conversations/calls#wrap-up-window-agent-guide" target="_blank">More info</a>.
     */
    public function get(): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountWrapUpApiModel
    {
        /** @var \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountWrapUpApiModel $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/ccaas/voice/2/account-wrap-up-config',
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
        'responseType' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\AccountWrapUpApiModel',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\AccountWrapUpApiModel',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update account wrap up configuration
     *
     * Use this method to update account wrap up configuration. Wrap up is the time after a call during which an agent's status is still BUSY. Default wrap up time is 30 seconds. <a href="https://www.infobip.com/docs/conversations/calls#wrap-up-window-agent-guide" target="_blank">More info</a>.
     */
    public function put(\InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountWrapUpApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountWrapUpApiModel
    {
        /** @var \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AccountWrapUpApiModel $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload);
        return $result;
    }

}
