<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1;

final class Agents extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/agents [operationId: get-agents] */
    /**
     * Get agents
     *
     * Use this method to get a list of agents with pagination and filtering options. Using a filter is optional. The result can be filtered by one or many optional filters described in parameters. <a href="https://www.infobip.com/docs/conversations/get-started" target="_blank">More info</a>
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Resource1\Agents $params = null): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentResponseResultPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Agents::class)->get($params);
    }

    /** POST /ccaas/1/agents [operationId: create-agent] */
    /**
     * Create agent
     *
     * Use this method to add a new agent. <a href="https://www.infobip.com/docs/conversations/get-started" target="_blank">More info</a>
     */
    public static function post(\InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentRequest $payload): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Agents::class)->post($payload);
    }

    /** GET /ccaas/1/agents/{agentId} [operationId: get-agent] */
    /**
     * Get agent
     *
     * Use this method to get a single agent. <a href="https://www.infobip.com/docs/conversations/get-started" target="_blank">More info</a>
     */
    public static function getByAgentId(string $agentId): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentResponseWithEmail
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Agents::class)->getByAgentId($agentId);
    }

    /** PUT /ccaas/1/agents/{agentId} [operationId: update-agent] */
    /**
     * Update agent
     *
     * Use this method to update an agent. <a href="https://www.infobip.com/docs/conversations/get-started" target="_blank">More info</a>
     */
    public static function putByAgentId(string $agentId, \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentRequest $payload): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Agents::class)->putByAgentId($agentId, $payload);
    }

}
