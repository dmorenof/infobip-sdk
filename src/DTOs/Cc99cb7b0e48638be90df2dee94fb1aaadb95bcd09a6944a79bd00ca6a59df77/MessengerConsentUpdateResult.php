<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * MessengerConsentUpdateResult
 *
 * List of consent update results.
 */
final class MessengerConsentUpdateResult extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'channel',
    'channelData',
    'createdAt',
    'event',
    'from',
    'sender',
];

    /**
     * Channel identifier.
     * Example: "MESSENGER"
     */
    public string $channel;
    public \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\MessengerConsentChannelData $channelData;
    /**
     * ISO 8601 timestamp of the event.
     * Example: "2024-01-14T12:00:00.000+0000"
     */
    public string $createdAt;
    public \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\ConsentEvent $event;
    /**
     * End-user identifier (page-scoped user ID).
     * Example: "6662136340512053"
     */
    public string $from;
    /**
     * Business identifier (Facebook page ID).
     * Example: "112345678901234"
     */
    public string $sender;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = $value : parent::assignMember($name, $value),
            'channelData' => $value instanceof \stdClass ? $this->channelData = new \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\MessengerConsentChannelData($value) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\ConsentEvent::from($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
