<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * NetworkStatus
 */
final class NetworkStatus extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'throughput' => [
            'format' => 'int32',
        ],
    ];

    /**
     * This value indicates the brand tier for T-Mobile, which determines the corresponding throughput limit.
     */
    public string $brandTier;
    /**
     * This value is provided by some carriers to help determine throughput and daily limits.
     * Refer to the [current documentation](https://www.infobip.com/docs/10dlc/throughput) for how to interpret these values as they may change over time.
     */
    public string $messageClass;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Network $network;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NetworkState $state;
    /**
     * This value represents the throughput limit, which is calculated based on the message class and brand tier.
     * Its meaning varies depending on the carrier: for AT&T, it denotes messages per minute, while for T-Mobile, it denotes messages per day.
     * If the throughput value is null, the throughput is considered unlimited.
     * Format: int32
     */
    public int $throughput {
        set {
            $this->assigning('throughput', $value);
            $this->throughput = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandTier' => is_string($value) ? $this->brandTier = $value : parent::assignMember($name, $value),
            'messageClass' => is_string($value) ? $this->messageClass = $value : parent::assignMember($name, $value),
            'network' => is_string($value) ? $this->network = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Network::from($value) : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NetworkState::from($value) : parent::assignMember($name, $value),
            'throughput' => is_int($value) ? $this->throughput = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
