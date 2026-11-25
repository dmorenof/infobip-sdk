<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveVoiceButtonContent
 *
 * The content object to build a message that will be sent.
 */
final class InteractiveVoiceButtonContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'body',
    ];

    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveVoiceButtonMessageActionWhatsAppContent $action;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveBodyWhatsAppContent $body;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => $value instanceof \stdClass ? $this->action = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveVoiceButtonMessageActionWhatsAppContent($value) : parent::assignMember($name, $value),
            'body' => $value instanceof \stdClass ? $this->body = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveBodyWhatsAppContent($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
