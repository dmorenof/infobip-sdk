<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2;

final class AgentRecordingConfigs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/voice/2/agent-recording-configs [operationId: get-conversations-agent-recording-configs] */
    /**
     * Get agent recording configurations
     *
     * Use this method to retrieve agent recording configurations. <a href="https://www.infobip.com/docs/conversations/calls#recording-set-up-calls" target="_blank">More info</a>.
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Voice\Resource2\AgentRecordingConfigs $params = null): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AgentRecordingConfigApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\AgentRecordingConfigs::class)->get($params);
    }

    /** GET /ccaas/voice/2/agent-recording-configs/{agentId} [operationId: get-conversations-agent-recording-config] */
    /**
     * Get agent recording configuration
     *
     * Use this method to retrieve the agent recording configuration. <a href="https://www.infobip.com/docs/conversations/calls#recording-set-up-calls" target="_blank">More info</a>.
     */
    public static function getByAgentId(string $agentId): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AgentRecordingConfigApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\AgentRecordingConfigs::class)->getByAgentId($agentId);
    }

    /** POST /ccaas/voice/2/agent-recording-configs/{agentId} [operationId: create-conversations-agent-recording-config] */
    /**
     * Create agent recording configuration
     *
     * Use this method to create an agent recording configuration. <a href="https://www.infobip.com/docs/conversations/calls#recording-set-up-calls" target="_blank">More info</a>.
     */
    public static function postByAgentId(string $agentId, \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AgentRecordingConfigApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AgentRecordingConfigApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\AgentRecordingConfigs::class)->postByAgentId($agentId, $payload);
    }

    /** PUT /ccaas/voice/2/agent-recording-configs/{agentId} [operationId: update-conversations-agent-recording-config] */
    /**
     * Update agent recording configuration
     *
     * Use this method to create or update an agent recording configuration. <a href="https://www.infobip.com/docs/conversations/calls#recording-set-up-calls" target="_blank">More info</a>.
     */
    public static function putByAgentId(string $agentId, \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AgentRecordingConfigApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AgentRecordingConfigApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\AgentRecordingConfigs::class)->putByAgentId($agentId, $payload);
    }
}
