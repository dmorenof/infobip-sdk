<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * PageMarketingSubscriptionResponse
 */
final class PageMarketingSubscriptionResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'notificationMessagesToken',
    ];

    /**
     * Creation Datetime.
     * Format: date-time
     */
    public string $creationDatetime;
    /**
     * Meta Custom Audience IDs associated with the subscription token.
     */
    public \InfobipSDK\Collections\StringCollection $customAudienceIds;
    /**
     * The date on which it will be possible to send the next message.
     * Format: date-time
     */
    public string $nextEligibleDatetime;
    public \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\NotificationMessageReoptin $notificationMessagesReoptin;
    /**
     * Timezone for the person receiving the message.
     * Example: "Europe\\/Zagreb"
     */
    public string $notificationMessagesTimezone;
    /**
     * Token that represents the person. It is used to send Marketing Messages.
     * Example: "1111111111111111111"
     */
    public string $notificationMessagesToken;
    /**
     * Page-scoped user/recipient ID.
     * Example: "1111111111111111"
     */
    public string $recipientId;
    /**
     * Title.
     * Example: "title"
     */
    public string $title;
    /**
     * Date when the notification message token expires.
     * Format: date-time
     */
    public string $tokenExpiry;
    public \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\UserTokenRefreshStatus $userTokenStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creationDatetime' => is_string($value) ? $this->creationDatetime = $value : parent::assignMember($name, $value),
            'customAudienceIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->customAudienceIds = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'nextEligibleDatetime' => is_string($value) ? $this->nextEligibleDatetime = $value : parent::assignMember($name, $value),
            'notificationMessagesReoptin' => is_string($value) ? $this->notificationMessagesReoptin = \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\NotificationMessageReoptin::from($value) : parent::assignMember($name, $value),
            'notificationMessagesTimezone' => is_string($value) ? $this->notificationMessagesTimezone = $value : parent::assignMember($name, $value),
            'notificationMessagesToken' => is_string($value) ? $this->notificationMessagesToken = $value : parent::assignMember($name, $value),
            'recipientId' => is_string($value) ? $this->recipientId = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'tokenExpiry' => is_string($value) ? $this->tokenExpiry = $value : parent::assignMember($name, $value),
            'userTokenStatus' => is_string($value) ? $this->userTokenStatus = \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\UserTokenRefreshStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
