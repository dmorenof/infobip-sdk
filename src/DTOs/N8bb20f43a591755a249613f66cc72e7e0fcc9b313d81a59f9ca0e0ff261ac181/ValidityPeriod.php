<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181;

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
    public \InfobipSDK\Enums\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\ValidityPeriodTimeUnit $timeUnit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'timeUnit' => is_string($value) ? $this->timeUnit = \InfobipSDK\Enums\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\ValidityPeriodTimeUnit::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
