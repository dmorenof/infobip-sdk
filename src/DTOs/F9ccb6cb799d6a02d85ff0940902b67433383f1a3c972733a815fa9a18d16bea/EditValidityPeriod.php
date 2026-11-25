<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * editValidityPeriod
 *
 * Template validity period in which WhatsApp will try to deliver a template message. Supported ranges are dependent on template category: 10 seconds to 15 minutes for Authentication, 30 seconds to 12 hours for Utility, and 12 to 48 hours for Marketing. Omitting this field leaves the current validity period unchanged. Marketing validity periods apply only to messages sent through the Marketing Messages API and are ignored by the Cloud API.
 */
final class EditValidityPeriod extends \Dmorenof\SdkRuntime\DTO
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
     * Template validity period amount.
     * Format: int32
     */
    public int $amount {
        set {
            $this->assigning('amount', $value);
            $this->amount = $value;
        }
    }
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ValidityPeriodTimeUnit $timeUnit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'timeUnit' => is_string($value) ? $this->timeUnit = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ValidityPeriodTimeUnit::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
