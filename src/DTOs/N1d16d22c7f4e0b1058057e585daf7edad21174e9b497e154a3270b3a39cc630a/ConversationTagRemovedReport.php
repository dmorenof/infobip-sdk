<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * ConversationTagRemovedReport
 */
final class ConversationTagRemovedReport extends \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ConversationWebhookReport
{
    public const array REQUIRED_FIELDS = [
        'timestamp',
        'type',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\TagRemovedEventPayload $payload;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payload' => $value instanceof \stdClass ? $this->payload = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\TagRemovedEventPayload($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
