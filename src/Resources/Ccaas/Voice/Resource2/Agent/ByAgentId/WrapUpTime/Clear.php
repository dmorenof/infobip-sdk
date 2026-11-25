<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ccaas\Voice\Resource2\Agent\ByAgentId\WrapUpTime;

final class Clear extends \InfobipSDK\Client
{
    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/ccaas/voice/2/agent/{agentId}/wrap-up-time/clear',
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
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\StatusResponse',
    ];

    /**
     * Clear agent wrap up time
     *
     * Use this method to clear the agent wrap up time after a call. After that, the agent will no longer have Wrapping status. Wrap up is the time after a call during which an agent's status is still BUSY. <a href="https://www.infobip.com/docs/conversations/calls#wrap-up-window-agent-guide" target="_blank">More info</a>.
     */
    public function patch(string $agentId): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse
    {
        /** @var \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse $result */
        $result = $this->executeArguments(self::operation(self::PATCH), path: ['agentId' => $agentId]);
        return $result;
    }

}
