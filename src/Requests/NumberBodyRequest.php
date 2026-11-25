<?php

declare(strict_types=1);

namespace InfobipSDK\Requests;

final class NumberBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'pin',
];

    protected const array WRITE_ONLY_FIELDS = [
    'pin',
];

    /**
     * The PIN code to verify.
     */
    public string $pin;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pin' => is_string($value) ? $this->pin = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
