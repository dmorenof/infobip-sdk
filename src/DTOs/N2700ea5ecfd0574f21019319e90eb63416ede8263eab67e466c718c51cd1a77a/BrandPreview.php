<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * BrandPreview
 *
 * The preview of brand details to use with the campaign. This property is read-only and ignored in POST/PUT calls.
 */
final class BrandPreview extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the brand.
     */
    public string $brandId;
    /**
     * The name of the brand.
     */
    public string $brandName;
    /**
     * The website for the brand.
     */
    public string $website;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandId' => is_string($value) ? $this->brandId = $value : parent::assignMember($name, $value),
            'brandName' => is_string($value) ? $this->brandName = $value : parent::assignMember($name, $value),
            'website' => is_string($value) ? $this->website = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
