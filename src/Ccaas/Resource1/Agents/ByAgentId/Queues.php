<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Agents\ByAgentId;

final class Queues extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ccaas/1/agents/{agentId}/queues [operationId: add-agent-queue] */
    /**
     * Add agent to queue
     *
     * Use this method to add an agent to a queue.
     */
    public static function post(string $agentId, \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\QueueAssignRequest $payload): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Agents\ByAgentId\Queues::class)->post($agentId, $payload);
    }

    /** DELETE /ccaas/1/agents/{agentId}/queues/{queueId} [operationId: remove-agent-queue] */
    /**
     * Remove agent from queue
     *
     * Use this method to remove an agent from a queue.
     * Operation only deletes the link between a queue and the agent.
     */
    public static function deleteByQueueId(\InfobipSDK\PathParams\Ccaas\Resource1\Agents\ByAgentId\Queues\ByQueueId $identifier): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Agents\ByAgentId\Queues::class)->deleteByQueueId($identifier);
    }
}
