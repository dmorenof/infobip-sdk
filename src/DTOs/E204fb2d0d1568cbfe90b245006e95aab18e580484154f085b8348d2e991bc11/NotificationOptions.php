<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * NotificationOptions
 *
 * Options on how to alert the user when the Push message is received.
 */
final class NotificationOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'badge' => [
        'format' => 'int32',
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'badge',
    'category',
    'contentUrl',
    'inboxTopic',
    'isSilent',
    'soundEnabled',
    'soundName',
    'title',
    'vibrationEnabled',
    'webViewUrl',
];

    /**
     * Badge counter (iOS only).
     * Format: int32
     */
    public int $badge {
        set {
            $this->assigning('badge', $value);
            $this->badge = $value;
        }
    }
    /**
     * Category id for actionable notification. Supported on Android since MM SDK version 1.6.16. Supported on iOS since MM SDK version 2.6.9. Predefined category ids: `mm_accept_decline` - Accept & Decline button actions.
     */
    public string $category;
    /**
     * URL of the image displayed in the notification. Rich push notifications are available on devices with iOS 10 and Android 4.1.+. Supported on iOS since MM SDK version 2.5.8. Supported on Android since MM SDK version 1.6.4.
     */
    public string $contentUrl;
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\InAppStyle $inAppStyle;
    /**
     * A case sensitive topic name to save a message to an inbox. If the topic name does not exist for a specified account, message sending will be rejected.
     */
    public string $inboxTopic;
    /**
     * Set to `true` to send silent push message. Such messages are not displayed on device lock screen and in the notification center. Silent messages can be used to deliver custom data to your mobile application or to trigger an in-app notification.
     */
    public bool $isSilent;
    /**
     * Sound when notification arrives on a device.
     */
    public bool $soundEnabled;
    /**
     * Name of the custom sound played when notification arrives on a device. File should be located in the app with max 30 seconds length. File extension is required for iOS and optional for Android. For custom sound to be played soundEnabled shouldn’t be false (Example: `notification_sound.wav`). Check Android and iOS usage details.
     */
    public string $soundName;
    /**
     * Notification title displayed within notification. Requires iOS 10+ or Android 4.1+ (may depend on Android custom firmware)
     */
    public string $title;
    /**
     * Notification vibration (Android only).
     */
    public bool $vibrationEnabled;
    /**
     * URL to open external web page within the mobile app (web view).
     */
    public string $webViewUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'badge' => is_int($value) ? $this->badge = $value : parent::assignMember($name, $value),
            'category' => is_string($value) ? $this->category = $value : parent::assignMember($name, $value),
            'contentUrl' => is_string($value) ? $this->contentUrl = $value : parent::assignMember($name, $value),
            'inAppStyle' => is_string($value) ? $this->inAppStyle = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\InAppStyle::from($value) : parent::assignMember($name, $value),
            'inboxTopic' => is_string($value) ? $this->inboxTopic = $value : parent::assignMember($name, $value),
            'isSilent' => is_bool($value) ? $this->isSilent = $value : parent::assignMember($name, $value),
            'soundEnabled' => is_bool($value) ? $this->soundEnabled = $value : parent::assignMember($name, $value),
            'soundName' => is_string($value) ? $this->soundName = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'vibrationEnabled' => is_bool($value) ? $this->vibrationEnabled = $value : parent::assignMember($name, $value),
            'webViewUrl' => is_string($value) ? $this->webViewUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
