<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * Journey
 *
 * Journey the interaction is attached to.
 */
final class Journey extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'journeyId',
];

    /**
     * Identifier of the journey associated with the interaction.
     * Example: 1234
     * Format: int64
     */
    public int $journeyId;
    /**
     * Version of the journey associated with the interaction.
     * Example: 1
     * Format: int64
     */
    public int $journeyVersion;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'journeyId' => is_int($value) ? $this->journeyId = $value : parent::assignMember($name, $value),
            'journeyVersion' => is_int($value) ? $this->journeyVersion = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
