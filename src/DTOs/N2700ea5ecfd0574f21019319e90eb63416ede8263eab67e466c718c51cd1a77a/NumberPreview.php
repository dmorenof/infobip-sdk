<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * NumberPreview
 */
final class NumberPreview extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Number's country code.
     */
    public string $countryCode;
    /**
     * Number.
     */
    public string $number;
    /**
     * Unique ID of the number.
     */
    public string $numberKey;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'numberKey' => is_string($value) ? $this->numberKey = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
