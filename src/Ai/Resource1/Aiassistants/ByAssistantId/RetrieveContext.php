<?php

declare(strict_types=1);

namespace InfobipSDK\Ai\Resource1\Aiassistants\ByAssistantId;

final class RetrieveContext extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ai/1/aiassistants/{assistantId}/retrieve-context [operationId: retrieve-ai-assistant-context] */
    /**
     * Retrieve Context from AI Assistant
     *
     * Retrieves the most relevant context chunks from an AI assistant's knowledge base for a given message.<br/><br/>This endpoint performs a semantic search over the assistant's indexed documents and returns the most relevant text segments (top k chunks). You can specify how many chunks to return and optionally enable re-ranking for more accurate results.<br/><br/>The "use shared history" feature allowing an AI assistant to utilize the agent's conversation history, is only available if used together with [Infobip AI agents](https://www.infobip.com/docs/ai-agents).
     */
    public static function post(string $assistantId, \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\RetrieveContextRequest $payload): \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\RetrieveContextApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ai\Resource1\Aiassistants\ByAssistantId\RetrieveContext::class)->post($assistantId, $payload);
    }
}
