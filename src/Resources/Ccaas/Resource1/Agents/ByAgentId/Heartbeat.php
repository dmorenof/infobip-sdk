<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ccaas\Resource1\Agents\ByAgentId;

final class Heartbeat extends \InfobipSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/ccaas/1/agents/{agentId}/heartbeat',
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
            400 => '\\InfobipSDK\\DTOs\\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\\StatusCodeResponse',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\\StatusCodeResponse',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\\StatusCodeResponse',
    ];

    /**
     * Set agents heartbeat
     *
     * Use this method to set agents heartbeat. <a href="https://www.infobip.com/docs/conversations/get-started" target="_blank">More info</a>
     */
    public function put(string $agentId): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\StatusCodeResponse
    {
        /** @var \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\StatusCodeResponse $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: ['agentId' => $agentId]);
        return $result;
    }

}
