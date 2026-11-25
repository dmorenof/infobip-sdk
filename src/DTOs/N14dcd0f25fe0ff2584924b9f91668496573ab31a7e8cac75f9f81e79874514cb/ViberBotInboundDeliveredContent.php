<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotInboundDeliveredContent
 */
final class ViberBotInboundDeliveredContent extends \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Unique ID of the message
     */
    public string $messageToken;
    /**
     * Time of the event that triggered the callback
     * Format: int64
     */
    public int $timestamp;
    /**
     * Unique Viber user id
     */
    public string $userId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageToken' => is_string($value) ? $this->messageToken = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'userId' => is_string($value) ? $this->userId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
