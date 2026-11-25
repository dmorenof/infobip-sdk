<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ai\Resource1\Aiassistants\ByAssistantId;

final class RetrieveContext extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/ai/1/aiassistants/{assistantId}/retrieve-context',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\\RetrieveContextApiResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\\RetrieveContextRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Retrieve Context from AI Assistant
     *
     * Retrieves the most relevant context chunks from an AI assistant's knowledge base for a given message.<br/><br/>This endpoint performs a semantic search over the assistant's indexed documents and returns the most relevant text segments (top k chunks). You can specify how many chunks to return and optionally enable re-ranking for more accurate results.<br/><br/>The "use shared history" feature allowing an AI assistant to utilize the agent's conversation history, is only available if used together with [Infobip AI agents](https://www.infobip.com/docs/ai-agents).
     */
    public function post(string $assistantId, \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\RetrieveContextRequest $payload): \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\RetrieveContextApiResponse
    {
        /** @var \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\RetrieveContextApiResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['assistantId' => $assistantId]);
        return $result;
    }
}
