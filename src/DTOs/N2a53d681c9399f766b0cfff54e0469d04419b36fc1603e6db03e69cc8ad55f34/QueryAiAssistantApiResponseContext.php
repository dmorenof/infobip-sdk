<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34;

/**
 * QueryAiAssistantApiResponseContext
 *
 * Ai Assistant context used for generating the answer.
 */
final class QueryAiAssistantApiResponseContext extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Ai Assistant contexts before reranking.
     */
    public \InfobipSDK\Collections\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\QueryAiAssistantApiResponseContext\OriginalContextsCollection $originalContexts;
    /**
     * Ai Assistant contexts after reranking.
     */
    public \InfobipSDK\Collections\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\QueryAiAssistantApiResponseContext\OriginalContextsCollection $rerankedContexts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'originalContexts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->originalContexts = new \InfobipSDK\Collections\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\QueryAiAssistantApiResponseContext\OriginalContextsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\QueryAiAssistantApiResponseContextChunk::class)) : parent::assignMember($name, $value),
            'rerankedContexts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->rerankedContexts = new \InfobipSDK\Collections\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\QueryAiAssistantApiResponseContext\OriginalContextsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\QueryAiAssistantApiResponseContextChunk::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
