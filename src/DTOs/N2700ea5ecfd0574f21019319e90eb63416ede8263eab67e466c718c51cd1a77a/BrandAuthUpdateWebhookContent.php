<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * BrandAuthUpdateWebhookContent
 *
 * Event content.
 */
final class BrandAuthUpdateWebhookContent extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The new brand auth 2FA update.
     * Example: "BRAND_EMAIL_2FA_SEND"
     */
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAuthUpdateWebhookContent\AuthUpdateEnum $brandAuthUpdate;
    /**
     * The ID of the brand.
     * Example: "0579c038-55f2-11ee-9458-325096b39f47"
     * Format: uuid
     */
    public string $brandId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandAuthUpdate' => is_string($value) ? $this->brandAuthUpdate = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAuthUpdateWebhookContent\AuthUpdateEnum::from($value) : parent::assignMember($name, $value),
            'brandId' => is_string($value) ? $this->brandId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
