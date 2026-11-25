<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f;

/**
 * HolidaysApiModel
 *
 * List of working hours holidays.
 * Example: {"id":"aae9b06f-a323-4c9c-b807-7a9e4e015405","workingHoursId":"07ad4193-4354-488c-b45f-293dfa4c90fb","name":"New Year's Day","startDate":"2021-01-01","endDate":"2021-01-01","enabled":true}
 */
final class HolidaysApiModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 1,
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'id',
];

    /**
     * Holiday enable/disable toggle.
     */
    public bool $enabled;
    /**
     * End date. Format: yyyy-MM-dd
     * Format: date-time
     */
    public string $endDate;
    /**
     * Holiday ID.
     */
    public string $id;
    /**
     * Holiday name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Start date. Format: yyyy-MM-dd
     * Format: date-time
     */
    public string $startDate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'endDate' => is_string($value) ? $this->endDate = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'startDate' => is_string($value) ? $this->startDate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
