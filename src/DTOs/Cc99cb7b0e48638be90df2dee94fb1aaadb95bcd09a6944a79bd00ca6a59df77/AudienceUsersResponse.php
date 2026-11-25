<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * AudienceUsersResponse
 */
final class AudienceUsersResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'numInvalidEntries' => [
            'format' => 'int32',
        ],
        'numReceived' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Meta custom audience ID.
     * Example: "52512562968362"
     */
    public string $audienceId;
    /**
     * Number of invalid entries.
     * Example: 0
     * Format: int32
     */
    public int $numInvalidEntries {
        set {
            $this->assigning('numInvalidEntries', $value);
            $this->numInvalidEntries = $value;
        }
    }
    /**
     * Number of entries received.
     * Example: 1
     * Format: int32
     */
    public int $numReceived {
        set {
            $this->assigning('numReceived', $value);
            $this->numReceived = $value;
        }
    }
    public \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\SubscriptionInfo $subscriptionInfo;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audienceId' => is_string($value) ? $this->audienceId = $value : parent::assignMember($name, $value),
            'numInvalidEntries' => is_int($value) ? $this->numInvalidEntries = $value : parent::assignMember($name, $value),
            'numReceived' => is_int($value) ? $this->numReceived = $value : parent::assignMember($name, $value),
            'subscriptionInfo' => $value instanceof \stdClass ? $this->subscriptionInfo = new \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\SubscriptionInfo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
