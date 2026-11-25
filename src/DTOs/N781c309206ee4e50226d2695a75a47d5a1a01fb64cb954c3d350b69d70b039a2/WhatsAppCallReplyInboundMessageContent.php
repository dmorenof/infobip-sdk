<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * WhatsAppCallReplyInboundMessageContent
 * Example: {"callResponseType":"ACCEPT","expiration":"2025-01-01T00:00:00Z","type":"CALL_REPLY"}
 */
final class WhatsAppCallReplyInboundMessageContent extends \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppPublicInboundMessageContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\CallResponseType $callResponseType;
    /**
     * Format: date-time
     */
    public string $expiration;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callResponseType' => is_string($value) ? $this->callResponseType = \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\CallResponseType::from($value) : parent::assignMember($name, $value),
            'expiration' => is_string($value) ? $this->expiration = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
