<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * BrandAppealResponse
 *
 * Response returned after successfully submitting a brand identity appeal.
 */
final class BrandAppealResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier assigned to the submitted appeal.
     * Format: uuid
     */
    public string $appealId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appealId' => is_string($value) ? $this->appealId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
