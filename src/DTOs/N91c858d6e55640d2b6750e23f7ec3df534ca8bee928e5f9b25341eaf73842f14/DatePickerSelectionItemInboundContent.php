<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * DatePickerSelectionItemInboundContent
 *
 * Returned item.
 */
final class DatePickerSelectionItemInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'title',
    'value',
];

    protected const array VALIDATION = [
    'title' => [
        'minLength' => 1,
    ],
];

    /**
     * Title of the item.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }
    /**
     * Value of the item.
     * Format: date-time
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
