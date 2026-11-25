<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * BrandVetStatusWebhookContent
 *
 * Event content.
 */
final class BrandVetStatusWebhookContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'vettingScore' => [
        'format' => 'int32',
    ],
];

    /**
     * The ID of the brand.
     * Example: "0579c038-55f2-11ee-9458-325096b39f47"
     * Format: uuid
     */
    public string $brandId;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\WebhookBrandVetStatus $brandVettingStatus;
    /**
     * The ID of the brand vet.
     * Example: "20ef4b12-55f2-11ee-bfc2-325096b39f47"
     * Format: uuid
     */
    public string $vetId;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\WebhookBrandVettingType $vetType;
    /**
     * The vetting score of a brand vet. This can be empty if score isn't present.
     * Example: 80
     * Format: int32
     */
    public int $vettingScore {
        set {
            $this->assigning('vettingScore', $value);
            $this->vettingScore = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandId' => is_string($value) ? $this->brandId = $value : parent::assignMember($name, $value),
            'brandVettingStatus' => is_string($value) ? $this->brandVettingStatus = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\WebhookBrandVetStatus::from($value) : parent::assignMember($name, $value),
            'vetId' => is_string($value) ? $this->vetId = $value : parent::assignMember($name, $value),
            'vetType' => is_string($value) ? $this->vetType = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\WebhookBrandVettingType::from($value) : parent::assignMember($name, $value),
            'vettingScore' => is_int($value) ? $this->vettingScore = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
