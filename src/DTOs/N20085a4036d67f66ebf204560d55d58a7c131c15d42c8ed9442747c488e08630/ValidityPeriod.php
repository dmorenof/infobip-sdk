<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

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
    public \InfobipSDK\Enums\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\ValidityPeriodTimeUnit $timeUnit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'timeUnit' => is_string($value) ? $this->timeUnit = \InfobipSDK\Enums\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\ValidityPeriodTimeUnit::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
