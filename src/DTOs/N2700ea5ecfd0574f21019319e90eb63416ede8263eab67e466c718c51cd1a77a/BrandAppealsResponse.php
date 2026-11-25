<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * BrandAppealsResponse
 *
 * Response containing the list of all appeals submitted for a brand.
 */
final class BrandAppealsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of appeals submitted for the brand, ordered from most recent to oldest.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAppealsResponse\AppealsCollection $appeals;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appeals' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->appeals = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAppealsResponse\AppealsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAppealPreview::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
