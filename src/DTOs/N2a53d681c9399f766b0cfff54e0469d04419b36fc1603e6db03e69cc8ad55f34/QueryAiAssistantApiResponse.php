<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34;

/**
 * QueryAiAssistantApiResponse
 */
final class QueryAiAssistantApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'response',
    ];

    public \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\QueryAiAssistantApiResponseContext $context;
    /**
     * Ai Assistant answer.
     */
    public string $response;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'context' => $value instanceof \stdClass ? $this->context = new \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\QueryAiAssistantApiResponseContext($value) : parent::assignMember($name, $value),
            'response' => is_string($value) ? $this->response = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
