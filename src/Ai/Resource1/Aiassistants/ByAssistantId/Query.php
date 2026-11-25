<?php

declare(strict_types=1);

namespace InfobipSDK\Ai\Resource1\Aiassistants\ByAssistantId;

final class Query extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ai/1/aiassistants/{assistantId}/query [operationId: query-ai-assistant] */
    /**
     * Query AI Assistant by ID
     *
     * Forwards a message from a user to a specific AI assistant identified by its unique ID and returns the assistant's response.<br/><br/>This endpoint performs a semantic search over an AI assistant's indexed documents based on configured guidelines. It then generates a response using the LLM connected to the assistant.<br/><br/>The "use shared history" feature allowing an AI assistant to utilize the agent's conversation history, is only available if used together with [Infobip AI agents](https://www.infobip.com/docs/ai-agents).
     */
    public static function post(string $assistantId, \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\SimpleAiAssistantQuery $payload): \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\QueryAiAssistantApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ai\Resource1\Aiassistants\ByAssistantId\Query::class)->post($assistantId, $payload);
    }
}
