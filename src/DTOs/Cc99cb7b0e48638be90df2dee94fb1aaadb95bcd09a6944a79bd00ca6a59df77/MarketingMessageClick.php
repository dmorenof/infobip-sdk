<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * MarketingMessageClick
 */
final class MarketingMessageClick extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'campaignId',
        'clickedAt',
        'from',
        'messageId',
        'notificationType',
        'to',
    ];

    /**
     * Campaign Id.
     */
    public string $campaignId;
    /**
     * Date and time when the marketing message was clicked. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
     * Format: date-time
     */
    public string $clickedAt;
    /**
     * Token that represents the recipient. It is used to send Marketing Messages.
     */
    public string $from;
    /**
     * The ID that uniquely identifies the message sent to the recipient.
     */
    public string $messageId;
    public \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\NotificationType $notificationType;
    /**
     * Page ID.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'campaignId' => is_string($value) ? $this->campaignId = $value : parent::assignMember($name, $value),
            'clickedAt' => is_string($value) ? $this->clickedAt = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'notificationType' => is_string($value) ? $this->notificationType = \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\NotificationType::from($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
