<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33;

/**
 * BlocklistResponse
 *
 * Blocklist response.
 */
final class BlocklistResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'accountKey',
        'createdDate',
        'destination',
        'sourceType',
    ];

    /**
     * Account connected with a blocklist record. Main account has access to blocklist records of their subaccounts. Subaccounts can only access blocklist records specific to them. [API to retrieve account key](https://www.infobip.com/docs/api/platform/account-management/get-all-accounts).
     */
    public string $accountKey;
    /**
     * ID that allows you to track, analyze, and show an aggregated overview and the performance of individual campaigns per sending channel.
     * Format: string
     */
    public string $campaign;
    public \InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\ViewableChannel $channel;
    /**
     * Timestamp of created blocklist record.
     * Format: date-time
     */
    public string $createdDate;
    /**
     * Blocklisted destination address.
     */
    public string $destination;
    /**
     * The sender ID for which blocklist happened.
     */
    public string $sender;
    public \InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\SourceType $sourceType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accountKey' => is_string($value) ? $this->accountKey = $value : parent::assignMember($name, $value),
            'campaign' => is_string($value) ? $this->campaign = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\ViewableChannel::from($value) : parent::assignMember($name, $value),
            'createdDate' => is_string($value) ? $this->createdDate = $value : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'sourceType' => is_string($value) ? $this->sourceType = \InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\SourceType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
