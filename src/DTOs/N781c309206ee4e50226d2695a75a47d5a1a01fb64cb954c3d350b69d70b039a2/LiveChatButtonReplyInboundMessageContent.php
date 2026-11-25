<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * LiveChatButtonReplyInboundMessageContent
 * Example: {"text":"Button text","buttonPayloadType":"POSTBACK","payload":"Button reply payload","type":"BUTTON_REPLY"}
 */
final class LiveChatButtonReplyInboundMessageContent extends \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\LiveChatPublicInboundMessageContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\ButtonPayloadType $buttonPayloadType;
    public string $payload;
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buttonPayloadType' => is_string($value) ? $this->buttonPayloadType = \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\ButtonPayloadType::from($value) : parent::assignMember($name, $value),
            'payload' => is_string($value) ? $this->payload = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
