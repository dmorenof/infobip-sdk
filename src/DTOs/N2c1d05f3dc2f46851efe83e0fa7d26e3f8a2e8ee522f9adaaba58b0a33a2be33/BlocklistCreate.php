<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33;

/**
 * BlocklistCreate
 *
 * Blocklist.
 */
final class BlocklistCreate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'destinations',
];

    protected const array VALIDATION = [
    'destinations' => [
        'minItems' => 1,
    ],
    'sender' => [
        'minLength' => 1,
        'maxLength' => 255,
    ],
];

    /**
     * Account connected with a blocklist record. Main account has access to blocklist records of their subaccounts. Subaccounts can only access blocklist records specific to them. [API to retrieve account key](https://www.infobip.com/docs/api/platform/account-management/get-all-accounts).
     */
    public string $accountKey;
    public \InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\CreatableChannel $channel;
    /**
     * Destination addresses that need to be blocklisted.
     */
    public \InfobipSDK\Collections\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\BlocklistCreate\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    /**
     * The sender ID for which blocklist happened.
     */
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accountKey' => is_string($value) ? $this->accountKey = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\CreatableChannel::from($value) : parent::assignMember($name, $value),
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->destinations = new \InfobipSDK\Collections\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\BlocklistCreate\DestinationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\ToCreate::class)) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
