<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * RetryOptions
 *
 * Used to determine whether to retry the delivery of a bulk call if the initial attempt fails. Additional retries will occur based on the schedule defined by the _minWaitPeriod_ and _maxWaitPeriod_ parameters, as well as the platform's internal retry logic. If _minWaitPeriod_ differs from _maxWaitPeriod_, the delivery will be retried according to the following schedule: after 1 minute, 2 minutes, 5 minutes, 10 minutes, 20 minutes, 30 minutes, 1 hour, 2 hours, 4 hours, 8 hours, 16 hours, and 24 hours, or until _maxWaitPeriod_ is reached. Once the retry attempt for _maxWaitPeriod_ is reached, _maxWaitPeriod_ will be used for all subsequent retries. If _minWaitPeriod_ and _maxWaitPeriod_ are defined as equal values, the period between retries will be equal to this value. Bulk call delivery will be retried until successful delivery, call validity expiration, or reaching the _maxAttempts_ value.
 */
final class RetryOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'maxAttempts' => [
        'format' => 'int32',
    ],
    'maxWaitPeriod' => [
        'format' => 'int32',
    ],
    'minWaitPeriod' => [
        'format' => 'int32',
    ],
];

    /**
     * Defines the maximum number of retry attempts. The maximum value is `4`. If a value higher than `4` is entered, it will be set to `4`.
     * Format: int32
     */
    public int $maxAttempts {
        set {
            $this->assigning('maxAttempts', $value);
            $this->maxAttempts = $value;
        }
    }
    /**
     * Defines the maximum waiting time (in minutes) after the previous failed attempt before trying to establish the call again. Supported values are 1 minute, 2 minutes, 5 minutes, 10 minutes, 20 minutes, 30 minutes, 1 hour, 2 hours, 4 hours, 8 hours, 16 hours, and 24 hours. If entered a value that is not in the list but is smaller than 24 hours, the next bigger value from the list will be used. If a value larger than 24 hours is entered, 24 hours will be used.
     * Format: int32
     */
    public int $maxWaitPeriod {
        set {
            $this->assigning('maxWaitPeriod', $value);
            $this->maxWaitPeriod = $value;
        }
    }
    /**
     * Defines the minimum waiting time (in minutes) after the previous failed attempt before trying to establish the call again. Supported values are 1 minute, 2 minutes, 5 minutes, 10 minutes, 20 minutes, 30 minutes, 1 hour, 2 hours, 4 hours, 8 hours, 16 hours, and 24 hours. If entered a value that is not in the list but is smaller than 24 hours, the next bigger value from the list will be used. If a value larger than 24 hours is entered, 24 hours will be used.
     * Format: int32
     */
    public int $minWaitPeriod {
        set {
            $this->assigning('minWaitPeriod', $value);
            $this->minWaitPeriod = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'maxAttempts' => is_int($value) ? $this->maxAttempts = $value : parent::assignMember($name, $value),
            'maxWaitPeriod' => is_int($value) ? $this->maxWaitPeriod = $value : parent::assignMember($name, $value),
            'minWaitPeriod' => is_int($value) ? $this->minWaitPeriod = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
