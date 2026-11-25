<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c;

/**
 * SendingSpeedLimit
 *
 * Limits the send speed when sending messages in bulk to deliver messages over a longer period of time. You may wish to use this to allow your systems or agents to handle large amounts of incoming traffic, e.g., if you are expecting recipients to follow through with a call-to-action option from a message you sent. Not setting a send speed limit can overwhelm your resources with incoming traffic.
 */
final class SendingSpeedLimit extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
    ];

    protected const array VALIDATION = [
        'amount' => [
            'format' => 'int32',
        ],
    ];

    /**
     * The number of messages to be sent per timeUnit. By default, the system sends messages as fast as the infrastructure allows. Use this parameter to adapt sending capacity to your needs. The system is only able to work against its maximum capacity for ambitious message batches.
     * Format: int32
     */
    public int $amount {
        set {
            $this->assigning('amount', $value);
            $this->amount = $value;
        }
    }
    public \InfobipSDK\Enums\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\SpeedLimitTimeUnit $timeUnit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'timeUnit' => is_string($value) ? $this->timeUnit = \InfobipSDK\Enums\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\SpeedLimitTimeUnit::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
