<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34;

/**
 * QueryAiAssistantApiResponseContextChunk
 *
 * Ai Assistant contexts after reranking.
 */
final class QueryAiAssistantApiResponseContextChunk extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'filename',
        'text',
    ];

    /**
     * The name of the source file from which this context chunk was extracted.
     */
    public string $filename;
    /**
     * The text content of the context chunk retrieved from the assistant's knowledge base.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'filename' => is_string($value) ? $this->filename = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
