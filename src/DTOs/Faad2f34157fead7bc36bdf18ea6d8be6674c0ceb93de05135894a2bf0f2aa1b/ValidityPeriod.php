<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * ValidityPeriod
 *
 * Message validity period. Once expired, the message won't be sent. Validity period longer than 48h is not supported. If exceeded, it will be automatically set to 48h.
 */
final class ValidityPeriod extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'amount',
];

    protected const array VALIDATION = [
    'amount' => [
        'minimum' => 0,
        'exclusiveMinimum' => 0,
        'format' => 'int32',
    ],
];

    /**
     * Message validity period's value. If `timeUnit` is not set, it will default to `MINUTES`.
     * Format: int32
     */
    public int $amount {
        set {
            $this->assigning('amount', $value);
            $this->amount = $value;
        }
    }
    public \InfobipSDK\Enums\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\ValidityPeriodTimeUnit $timeUnit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'timeUnit' => is_string($value) ? $this->timeUnit = \InfobipSDK\Enums\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\ValidityPeriodTimeUnit::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
