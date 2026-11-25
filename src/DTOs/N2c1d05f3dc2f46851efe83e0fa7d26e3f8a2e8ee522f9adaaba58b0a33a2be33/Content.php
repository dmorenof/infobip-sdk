<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33;

/**
 * Content
 *
 * Event content.
 */
final class Content extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'destination',
    'sourceType',
];

    public \InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\CampaignReference $campaignReference;
    public \InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\ViewableChannel $channel;
    /**
     * Blocklisted destination address.
     */
    public string $destination;
    public \InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\InboundMessageReference $inboundMessageReference;
    public \InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\OutboundMessageReference $outboundMessageReference;
    /**
     * The sender ID for which blocklist happened.
     */
    public string $sender;
    public \InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\EventSourceType $sourceType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'campaignReference' => $value instanceof \stdClass ? $this->campaignReference = new \InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\CampaignReference($value) : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\ViewableChannel::from($value) : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'inboundMessageReference' => $value instanceof \stdClass ? $this->inboundMessageReference = new \InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\InboundMessageReference($value) : parent::assignMember($name, $value),
            'outboundMessageReference' => $value instanceof \stdClass ? $this->outboundMessageReference = new \InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\OutboundMessageReference($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'sourceType' => is_string($value) ? $this->sourceType = \InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\EventSourceType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
