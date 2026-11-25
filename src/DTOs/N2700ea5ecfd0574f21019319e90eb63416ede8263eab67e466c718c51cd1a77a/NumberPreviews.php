<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * NumberPreviews
 */
final class NumberPreviews extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'numberPreviews' => [
        'uniqueItems' => true,
    ],
];

    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberPreviewsCollection $numberPreviews {
        set {
            $this->assigning('numberPreviews', $value);
            $this->numberPreviews = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'numberPreviews' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->numberPreviews = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberPreviewsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPreview::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
