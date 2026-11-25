<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushRequestNotificationOptions
 *
 * JSON object that contains notification options.
 */
final class PushRequestNotificationOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'badge' => [
        'format' => 'int32',
    ],
    'inAppExpirationPeriod' => [
        'minimum' => 0,
    ],
    'title' => [
        'minLength' => 0,
        'maxLength' => 45,
    ],
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
     * Category id for actionable notification. Supported on [Android](https://github.com/infobip/mobile-messaging-sdk-android/wiki/Interactive-notifications) since MM SDK version 1.6.16. Supported on [iOS](https://github.com/infobip/mobile-messaging-sdk-ios/wiki/Interactive-Notifications) since MM SDK version 2.6.9. Predefined category ids: mm_accept_decline - Accept & Decline button actions.
     */
    public string $category;
    /**
     * URL of the image displayed in the notification. Rich push notifications are available on devices with [iOS](https://github.com/infobip/mobile-messaging-sdk-ios/wiki/Rich-notifications) 10 and [Android](https://github.com/infobip/mobile-messaging-sdk-android/wiki/Rich-notifications) 4.1.+. Supported on iOS since MM SDK version 2.5.8. Supported on Android since MM SDK version 1.6.4.
     */
    public string $contentUrl;
    /**
     * Specifies custom title for `Dismiss` button. Supported on Android since version 3.4.0, on iOS since version 8.2.1.
     */
    public string $inAppDismissTitle;
    /**
     * Sets validity period for in-app notification. Users will only see in-app if they received it to their device within validity period, which starts from sending time. Time unit for this parameter is set by property of inAppExpirationTimeUnit. Default value is 48h. Supported on Android since version 3.4.0, on iOS since version 8.2.1
     * Format: int64
     */
    public int $inAppExpirationPeriod {
        set {
            $this->assigning('inAppExpirationPeriod', $value);
            $this->inAppExpirationPeriod = $value;
        }
    }
    public \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\InAppExpirationTimeUnit $inAppExpirationTimeUnit;
    /**
     * Specifies custom title for `Open` button. Supported on Android since version 3.4.0, on iOS since version 8.2.1.
     */
    public string $inAppOpenTitle;
    public \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\InAppStyle $inAppStyle;
    /**
     * A case sensitive topic name to save a message to an inbox. If the topic name does not exist for a specified account, message sending will be rejected.
     */
    public string $inboxTopic;
    /**
     * Set to true to send silent push message. Such messages aren’t displayed on device lock screen and in the notification center. Silent messages can be used to deliver custom data to your mobile application or to trigger an in-app notification.
     */
    public bool $isSilent;
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PrimaryButtonAction $primaryButtonAction;
    /**
     * Show notification in application.
     */
    public bool $showInApp;
    /**
     * Sound when a notification arrives on a device.
     */
    public bool $soundEnabled;
    /**
     * Name of the custom sound played when a notification arrives on a device. The audio file should be located in the app with max 30 seconds length. File extension is required for [iOS](https://github.com/infobip/mobile-messaging-sdk-ios/wiki/How-to-use-custom-notification-sound%3F) and optional for [Android](https://github.com/infobip/mobile-messaging-sdk-android/wiki/How-to-use-custom-notification-sound%3F). (Example: notification_sound.wav). Check Android and iOS usage details. To play a custom sound, `soundEnabled` must be set to `true`.
     */
    public string $soundName;
    /**
     * Notification title displayed within the notification. Requires iOS 10+ or Android 4.1+ (may depend on Android custom firmware)
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }
    /**
     * Notification vibration (Android only).
     */
    public bool $vibrationEnabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'badge' => is_int($value) ? $this->badge = $value : parent::assignMember($name, $value),
            'category' => is_string($value) ? $this->category = $value : parent::assignMember($name, $value),
            'contentUrl' => is_string($value) ? $this->contentUrl = $value : parent::assignMember($name, $value),
            'inAppDismissTitle' => is_string($value) ? $this->inAppDismissTitle = $value : parent::assignMember($name, $value),
            'inAppExpirationPeriod' => is_int($value) ? $this->inAppExpirationPeriod = $value : parent::assignMember($name, $value),
            'inAppExpirationTimeUnit' => is_string($value) ? $this->inAppExpirationTimeUnit = \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\InAppExpirationTimeUnit::from($value) : parent::assignMember($name, $value),
            'inAppOpenTitle' => is_string($value) ? $this->inAppOpenTitle = $value : parent::assignMember($name, $value),
            'inAppStyle' => is_string($value) ? $this->inAppStyle = \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\InAppStyle::from($value) : parent::assignMember($name, $value),
            'inboxTopic' => is_string($value) ? $this->inboxTopic = $value : parent::assignMember($name, $value),
            'isSilent' => is_bool($value) ? $this->isSilent = $value : parent::assignMember($name, $value),
            'primaryButtonAction' => $value instanceof \stdClass ? $this->primaryButtonAction = new \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PrimaryButtonAction($value) : parent::assignMember($name, $value),
            'showInApp' => is_bool($value) ? $this->showInApp = $value : parent::assignMember($name, $value),
            'soundEnabled' => is_bool($value) ? $this->soundEnabled = $value : parent::assignMember($name, $value),
            'soundName' => is_string($value) ? $this->soundName = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'vibrationEnabled' => is_bool($value) ? $this->vibrationEnabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
