<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34;

/**
 * SimpleAiAssistantQuery
 *
 * Simple AI Assistant query with just a message.
 */
final class SimpleAiAssistantQuery extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'message',
];

    /**
     * User message an AI assistant receives.
     * Example: "Hello, what can you help me with?"
     */
    public string $message;
    /**
     * Flag to indicate whether to return the contexts used in generating the response.
     */
    public bool $returnContexts;
    /**
     * Session ID to maintain context across multiple queries.
     * Example: "session-12345"
     */
    public string $sessionId;
    /**
     * Indicates whether to use shared conversation history. Can only be used with [Infobip AI agents](https://www.infobip.com/docs/ai-agents).
     */
    public bool $useSharedHistory;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'returnContexts' => is_bool($value) ? $this->returnContexts = $value : parent::assignMember($name, $value),
            'sessionId' => is_string($value) ? $this->sessionId = $value : parent::assignMember($name, $value),
            'useSharedHistory' => is_bool($value) ? $this->useSharedHistory = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
