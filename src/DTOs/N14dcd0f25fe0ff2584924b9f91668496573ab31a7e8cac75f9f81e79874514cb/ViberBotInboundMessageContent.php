<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotInboundMessageContent
 */
final class ViberBotInboundMessageContent extends \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $chatHostname;
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotNestedInboundMessage $message;
    /**
     * Unique ID of the message
     */
    public string $messageToken;
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotUser $sender;
    public bool $silent;
    /**
     * Time of the event that triggered the callback
     * Format: int64
     */
    public int $timestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'chatHostname' => is_string($value) ? $this->chatHostname = $value : parent::assignMember($name, $value),
            'messageToken' => is_string($value) ? $this->messageToken = $value : parent::assignMember($name, $value),
            'sender' => $value instanceof \stdClass ? $this->sender = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotUser($value) : parent::assignMember($name, $value),
            'silent' => is_bool($value) ? $this->silent = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
