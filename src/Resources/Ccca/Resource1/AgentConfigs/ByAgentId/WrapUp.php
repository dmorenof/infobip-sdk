<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ccca\Resource1\AgentConfigs\ByAgentId;

final class WrapUp extends \InfobipSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/ccca/1/agent-configs/{agentId}/wrap-up',
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
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            404 => [
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
        'responseType' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\AgentConfigApiModel',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\AgentConfigWrapUpApiModel',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update agent wrap up configuration
     *
     * Use this method to create or update agent wrap up configuration.
     */
    public function put(string $agentId, ?\InfobipSDK\PutParams\Ccca\Resource1\AgentConfigs\ByAgentId\WrapUp $params = null): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AgentConfigApiModel
    {
        /** @var \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AgentConfigApiModel $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: ['agentId' => $agentId], parameters: $params);
        return $result;
    }

}
