<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * SubscriptionInfo
 *
 * Messenger subscription info.
 */
final class SubscriptionInfo extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'numSubscribersInvalidEntries' => [
        'format' => 'int32',
    ],
    'numSubscribersReceived' => [
        'format' => 'int32',
    ],
];

    /**
     * Number of invalid subscriber entries.
     * Example: 0
     * Format: int32
     */
    public int $numSubscribersInvalidEntries {
        set {
            $this->assigning('numSubscribersInvalidEntries', $value);
            $this->numSubscribersInvalidEntries = $value;
        }
    }
    /**
     * Number of subscribers matched.
     * Example: 1
     * Format: int32
     */
    public int $numSubscribersReceived {
        set {
            $this->assigning('numSubscribersReceived', $value);
            $this->numSubscribersReceived = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'numSubscribersInvalidEntries' => is_int($value) ? $this->numSubscribersInvalidEntries = $value : parent::assignMember($name, $value),
            'numSubscribersReceived' => is_int($value) ? $this->numSubscribersReceived = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
