<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * WhatsAppOutboundEventTypingIndicatorContent
 */
final class WhatsAppOutboundEventTypingIndicatorContent extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the message to be marked as read. This field is deprecated and will be autofilled by the system. Any values supplied by the user will be ignored.
     *
     * @deprecated
     */
    public string $messageId;
    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\WhatsAppOutboundEventContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\WhatsAppOutboundEventContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
