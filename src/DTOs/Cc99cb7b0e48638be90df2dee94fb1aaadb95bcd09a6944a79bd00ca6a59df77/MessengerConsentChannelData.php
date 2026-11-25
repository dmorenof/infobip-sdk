<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * MessengerConsentChannelData
 *
 * Messenger-specific subscription data.
 */
final class MessengerConsentChannelData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'notificationMessagesToken',
];

    /**
     * Timezone for the person receiving the message.
     * Example: "Europe/Warsaw"
     */
    public string $notificationMessagesTimezone;
    /**
     * Token required to send future marketing messages.
     * Example: "5049615565024480819"
     */
    public string $notificationMessagesToken;
    /**
     * Payload string from the subscription opt-in button.
     * Example: "promo_campaign_v2"
     */
    public string $subscriptionPayload;
    /**
     * Title of the subscription opt-in.
     * Example: "Get weekly deals"
     */
    public string $subscriptionTitle;
    /**
     * Date when the notification message token expires.
     * Example: "2030-01-01T00:00:00.000+0000"
     */
    public string $tokenExpiry;
    public \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\UserTokenStatus $userTokenStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'notificationMessagesTimezone' => is_string($value) ? $this->notificationMessagesTimezone = $value : parent::assignMember($name, $value),
            'notificationMessagesToken' => is_string($value) ? $this->notificationMessagesToken = $value : parent::assignMember($name, $value),
            'subscriptionPayload' => is_string($value) ? $this->subscriptionPayload = $value : parent::assignMember($name, $value),
            'subscriptionTitle' => is_string($value) ? $this->subscriptionTitle = $value : parent::assignMember($name, $value),
            'tokenExpiry' => is_string($value) ? $this->tokenExpiry = $value : parent::assignMember($name, $value),
            'userTokenStatus' => is_string($value) ? $this->userTokenStatus = \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\UserTokenStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
