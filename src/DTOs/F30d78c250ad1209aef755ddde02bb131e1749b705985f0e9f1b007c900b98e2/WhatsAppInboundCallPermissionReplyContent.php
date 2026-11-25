<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * WhatsAppInboundCallPermissionReplyContent
 */
final class WhatsAppInboundCallPermissionReplyContent extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\WhatsAppInboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\CallPermissionReply $callPermissionReply;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\Context $context;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callPermissionReply' => $value instanceof \stdClass ? $this->callPermissionReply = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\CallPermissionReply($value) : parent::assignMember($name, $value),
            'context' => $value instanceof \stdClass ? $this->context = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\Context($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
