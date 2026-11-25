<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * BrandVetStatusWebhookMessage
 *
 * Incoming events
 */
final class BrandVetStatusWebhookMessage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandVetStatusWebhookContent $content;
    /**
     * The name of the event.
     * Example: "BRAND_VET_UPDATE"
     */
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandVetStatusWebhookMessage\EventEnum $event;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandWebhookPlatform $platform;
    /**
     * Date and time when Infobip received the event.
     * Format: date-time
     */
    public string $receivedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => $value instanceof \stdClass ? $this->content = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandVetStatusWebhookContent($value) : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandVetStatusWebhookMessage\EventEnum::from($value) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandWebhookPlatform($value) : parent::assignMember($name, $value),
            'receivedAt' => is_string($value) ? $this->receivedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
