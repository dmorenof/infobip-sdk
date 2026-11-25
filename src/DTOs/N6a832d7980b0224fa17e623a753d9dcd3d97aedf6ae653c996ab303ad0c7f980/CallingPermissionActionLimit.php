<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980;

/**
 * CallingPermissionActionLimit
 *
 * A list of time-bound restrictions for the given action.
 */
final class CallingPermissionActionLimit extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currentUsage',
        'maxAllowed',
        'timePeriod',
    ];

    protected const array VALIDATION = [
        'currentUsage' => [
            'format' => 'int32',
        ],
        'maxAllowed' => [
            'format' => 'int32',
        ],
    ];

    /**
     * The current number of actions the business has taken within the specified time period.
     * Example: 1
     * Format: int32
     */
    public int $currentUsage {
        set {
            $this->assigning('currentUsage', $value);
            $this->currentUsage = $value;
        }
    }
    /**
     * Time at which the limit will expire.
     * Example: "2025-10-06T08:12:26.422Z"
     * Format: date-time
     */
    public string $limitExpirationTime;
    /**
     * The maximum number of actions allowed within the specified time period.
     * Example: 5
     * Format: int32
     */
    public int $maxAllowed {
        set {
            $this->assigning('maxAllowed', $value);
            $this->maxAllowed = $value;
        }
    }
    /**
     * Duration for which the limitation is applied in ISO 8601 format.
     * Example: "P7DT1H30M"
     * Format: duration
     */
    public string $timePeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currentUsage' => is_int($value) ? $this->currentUsage = $value : parent::assignMember($name, $value),
            'limitExpirationTime' => is_string($value) ? $this->limitExpirationTime = $value : parent::assignMember($name, $value),
            'maxAllowed' => is_int($value) ? $this->maxAllowed = $value : parent::assignMember($name, $value),
            'timePeriod' => is_string($value) ? $this->timePeriod = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
