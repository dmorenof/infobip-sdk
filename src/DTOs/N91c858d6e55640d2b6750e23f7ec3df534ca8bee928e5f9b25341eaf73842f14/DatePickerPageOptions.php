<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * DatePickerPageOptions
 *
 * Options of the page.
 */
final class DatePickerPageOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'labelText' => [
            'minLength' => 0,
            'maxLength' => 200,
        ],
    ];

    /**
     * Date format used on the page e.g. `MM/dd/yyyy`.
     */
    public string $dateFormat;
    /**
     * Text to be shown next to the date field.
     */
    public string $labelText {
        set {
            $this->assigning('labelText', $value);
            $this->labelText = $value;
        }
    }
    /**
     * Maximum date that the date picker can show. Has the following format: `YYYY-MM-DD`.
     * Format: date
     */
    public string $maximumDate;
    /**
     * Minimum date that the date picker can show. Has the following format: `YYYY-MM-DD`.
     * Format: date
     */
    public string $minimumDate;
    /**
     * Date displayed by the date picker. Has the following format: `YYYY-MM-DD`.
     * Format: date
     */
    public string $startDate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dateFormat' => is_string($value) ? $this->dateFormat = $value : parent::assignMember($name, $value),
            'labelText' => is_string($value) ? $this->labelText = $value : parent::assignMember($name, $value),
            'maximumDate' => is_string($value) ? $this->maximumDate = $value : parent::assignMember($name, $value),
            'minimumDate' => is_string($value) ? $this->minimumDate = $value : parent::assignMember($name, $value),
            'startDate' => is_string($value) ? $this->startDate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
