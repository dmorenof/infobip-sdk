<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * BrandRegistrationWebhookContent
 *
 * Event content.
 */
final class BrandRegistrationWebhookContent extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the brand.
     * Example: "0579c038-55f2-11ee-9458-325096b39f47"
     * Format: uuid
     */
    public string $brandId;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\WebhookBrandRegistrationStatus $brandStatus;
    /**
     * The rejection reasons. This field is present only when brand registration status is 'FAILURE'.
     * Example: ["Tax id does not match with the company name or business type."]
     */
    public \InfobipSDK\Collections\StringCollection $rejectionReasons;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandId' => is_string($value) ? $this->brandId = $value : parent::assignMember($name, $value),
            'brandStatus' => is_string($value) ? $this->brandStatus = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\WebhookBrandRegistrationStatus::from($value) : parent::assignMember($name, $value),
            'rejectionReasons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->rejectionReasons = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
