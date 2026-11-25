<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * LastMessageData
 *
 * Last message info that can be used for additional conversation information fetching.
 */
final class LastMessageData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Message channel type. See the list of [supported Conversations channels](https://www.infobip.com/docs/conversations#available-channels).
     * Example: "LIVE_CHAT"
     */
    public string $channel;
    /**
     * Message direction.
     * Example: "OUTBOUND"
     */
    public \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\LastMessageData\DirectionEnum $direction;
    /**
     * Sender, varies by channel (alphanumeric to UUID). Ranges from alphanumeric to UUID v4 values, depending on the channel.
     * Example: "d21806c0-279e-418d-8caf-b96223fd8392"
     */
    public string $from;
    /**
     * Recipient, varies by channel. Ranges from alphanumeric to UUID v4 values, depending on the channel.
     * Example: "a48d5aad-f584-41c6-b5e3-c1e3a43b52d2"
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\LastMessageData\DirectionEnum::from($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
