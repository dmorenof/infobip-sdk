<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageDatePickerFormPageOptions
 *
 * Options of the page.
 */
final class MessagesApiMessageDatePickerFormPageOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Date format used on the page e.g. `MM/dd/yyyy`.
     */
    public string $dateFormat;
    /**
     * Text to be shown next to the date field.
     */
    public string $dateLabel;
    /**
     * Maximum date that the date picker can show. Has the following format: `YYYY-MM-DD`.
     * Format: date-time
     */
    public string $maximumDate;
    /**
     * Minimum date that the date picker can show. Has the following format: `YYYY-MM-DD`.
     * Format: date-time
     */
    public string $minimumDate;
    /**
     * Date displayed by the date picker. Has the following format: `YYYY-MM-DD`.
     * Format: date-time
     */
    public string $startDate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dateFormat' => is_string($value) ? $this->dateFormat = $value : parent::assignMember($name, $value),
            'dateLabel' => is_string($value) ? $this->dateLabel = $value : parent::assignMember($name, $value),
            'maximumDate' => is_string($value) ? $this->maximumDate = $value : parent::assignMember($name, $value),
            'minimumDate' => is_string($value) ? $this->minimumDate = $value : parent::assignMember($name, $value),
            'startDate' => is_string($value) ? $this->startDate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
