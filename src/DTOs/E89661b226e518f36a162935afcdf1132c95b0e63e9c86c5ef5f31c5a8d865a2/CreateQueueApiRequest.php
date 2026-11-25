<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * CreateQueueApiRequest
 * Example: {"name":"Spanish Support"}
 */
final class CreateQueueApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    public string $externalId;
    /**
     * Auto-assignment of the queue.
     */
    public bool $isAutoAssignmentEnabled;
    /**
     * Name of the queue.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Working hours Id queue belongs to
     */
    public string $workingHoursId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'isAutoAssignmentEnabled' => is_bool($value) ? $this->isAutoAssignmentEnabled = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'workingHoursId' => is_string($value) ? $this->workingHoursId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
