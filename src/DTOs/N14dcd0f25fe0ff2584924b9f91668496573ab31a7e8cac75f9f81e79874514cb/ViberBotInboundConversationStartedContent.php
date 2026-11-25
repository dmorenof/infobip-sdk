<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotInboundConversationStartedContent
 */
final class ViberBotInboundConversationStartedContent extends \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Any additional parameters added to the deep link used to access the conversation passed as a string
     */
    public string $context;
    /**
     * The specific type of conversation_started event
     */
    public string $conversationType;
    /**
     * Unique ID of the message
     */
    public string $messageToken;
    /**
     * indicated whether a user is already subscribed
     */
    public bool $subscribed;
    /**
     * Time of the event that triggered the callback
     * Format: int64
     */
    public int $timestamp;
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotUser $user;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'context' => is_string($value) ? $this->context = $value : parent::assignMember($name, $value),
            'conversationType' => is_string($value) ? $this->conversationType = $value : parent::assignMember($name, $value),
            'messageToken' => is_string($value) ? $this->messageToken = $value : parent::assignMember($name, $value),
            'subscribed' => is_bool($value) ? $this->subscribed = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'user' => $value instanceof \stdClass ? $this->user = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotUser($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
