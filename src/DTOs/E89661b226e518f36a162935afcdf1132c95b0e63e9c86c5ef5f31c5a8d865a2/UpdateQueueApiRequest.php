<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * UpdateQueueApiRequest
 * Example: {"name":"Spanish Support","isAutoAssignmentEnabled":true,"autoAssignmentAlgorithm":"LOAD_BALANCING","isAutoAssignmentOutsideOfWorkingHoursEnabled":false,"stickyAgentTimeoutDays":7,"isStickyAutoAssignmentEnabled":true,"workingHoursId":null,"isRestricted":false,"externalId":null}
 */
final class UpdateQueueApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
    ];

    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\AutoAssignmentAlgorithm $autoAssignmentAlgorithm;
    /**
     * External identifier for the queue.
     */
    public string $externalId;
    /**
     * Queue Auto-assignment toggle.
     */
    public bool $isAutoAssignmentEnabled;
    /**
     * Queue Auto-assignment Outside of Working hours toggle
     */
    public bool $isAutoAssignmentOutsideOfWorkingHoursEnabled;
    /**
     * Is queue restricted.
     */
    public bool $isRestricted;
    /**
     * Auto-assignment according to last interaction with the customer.
     */
    public bool $isStickyAutoAssignmentEnabled;
    /**
     * Queue name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Number of days since last interaction with the customer.
     * Format: int64
     */
    public int $stickyAgentTimeoutDays;
    /**
     * Working hours Id queue belongs to
     */
    public string $workingHoursId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'autoAssignmentAlgorithm' => is_string($value) ? $this->autoAssignmentAlgorithm = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\AutoAssignmentAlgorithm::from($value) : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'isAutoAssignmentEnabled' => is_bool($value) ? $this->isAutoAssignmentEnabled = $value : parent::assignMember($name, $value),
            'isAutoAssignmentOutsideOfWorkingHoursEnabled' => is_bool($value) ? $this->isAutoAssignmentOutsideOfWorkingHoursEnabled = $value : parent::assignMember($name, $value),
            'isRestricted' => is_bool($value) ? $this->isRestricted = $value : parent::assignMember($name, $value),
            'isStickyAutoAssignmentEnabled' => is_bool($value) ? $this->isStickyAutoAssignmentEnabled = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'stickyAgentTimeoutDays' => is_int($value) ? $this->stickyAgentTimeoutDays = $value : parent::assignMember($name, $value),
            'workingHoursId' => is_string($value) ? $this->workingHoursId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
