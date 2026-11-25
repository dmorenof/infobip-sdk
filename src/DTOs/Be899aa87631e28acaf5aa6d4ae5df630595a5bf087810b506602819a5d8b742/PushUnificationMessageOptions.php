<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushUnificationMessageOptions
 *
 * Message options.
 */
final class PushUnificationMessageOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'badge' => [
            'format' => 'int32',
        ],
        'campaignReferenceId' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'mirroredPushExpirationPeriod' => [
            'minimum' => 0,
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
     * ID that allows you to track, analyze, and show an aggregated overview and the performance of individual campaigns per sending channel.
     */
    public string $campaignReferenceId {
        set {
            $this->assigning('campaignReferenceId', $value);
            $this->campaignReferenceId = $value;
        }
    }
    /**
     * Category id for actionable notification. Supported on [Android](https://github.com/infobip/mobile-messaging-sdk-android/wiki/Interactive-notifications) since MM SDK version 1.6.16. Supported on [iOS](https://github.com/infobip/mobile-messaging-sdk-ios/wiki/Interactive-Notifications) since MM SDK version 2.6.9. Predefined category ids: mm_accept_decline - Accept & Decline button actions.
     */
    public string $category;
    /**
     * System flag indicating whether or not mobile app should wake up when message received (iOS only).
     */
    public bool $contentAvailable;
    /**
     * Additional data that can be delivered with the Push message. customPayload must be formatted as JSON object.
     */
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushUnificationMessageOptions\CustomPayloadMap $customPayload;
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\DeliveryTimeWindow $deliveryTimeWindow;
    /**
     * Sets validity period for inbox message. Users will only see the message in their inbox if it has not expired. Time unit for this parameter is set by property of inboxMessageExpirationTimeUnit. This field is only applicable when inboxTopic is present.
     * Format: int64
     */
    public int $inboxMessageExpirationPeriod;
    public \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushOutboundContentOptionsInboxMessageExpirationTimeUnit $inboxMessageExpirationTimeUnit;
    /**
     * A case sensitive topic name to save a message to an inbox. If the topic name does not exist for a specified account, message sending will be rejected. [A case sensitive topic name to save a message to an inbox](https://www.infobip.com/docs/mobile-push/inbox)
     */
    public string $inboxTopic;
    /**
     * Set to true to send silent push message. Such messages aren’t displayed on device lock screen and in the notification center. Silent messages can be used to deliver custom data to your mobile application or to trigger a mirrored push notification.
     */
    public bool $isSilent;
    /**
     * Specifies custom title for `Dismiss` button for mirrored push notification.
     */
    public string $mirroredPushDismissTitle;
    /**
     * Sets validity period for mirrored push notification. Users will only see mirrored push notification if they received it to their device within validity period, which starts from sending time.
     * Format: int64
     */
    public int $mirroredPushExpirationPeriod {
        set {
            $this->assigning('mirroredPushExpirationPeriod', $value);
            $this->mirroredPushExpirationPeriod = $value;
        }
    }
    public \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushOutboundContentOptionsInAppExpirationTimeUnit $mirroredPushExpirationTimeUnit;
    /**
     * Specifies custom title for `Open` button for mirrored push notification.
     */
    public string $mirroredPushOpenTitle;
    public \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushOutboundContentOptionsInAppStyle $mirroredPushStyle;
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PrimaryButtonAction $onTapButtonAction;
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\Platform $platform;
    /**
     * Date and time when the message is to be sent. Used for scheduled messages. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, and can only be scheduled for no later than 180 days in advance.
     * Format: date-time
     */
    public string $sendAt;
    /**
     * Show mirrored push notification in application.
     */
    public bool $showMirroredPush;
    /**
     * Sound when a notification arrives on a device.
     */
    public bool $soundEnabled;
    /**
     * Name of the custom sound played when a notification arrives on a device. The audio file should be located in the app with max 30 seconds length. File extension is required for [iOS](https://github.com/infobip/mobile-messaging-sdk-ios/wiki/How-to-use-custom-notification-sound%3F) and optional for [Android](https://github.com/infobip/mobile-messaging-sdk-android/wiki/How-to-use-custom-notification-sound%3F). (Example: notification_sound.wav). Check Android and iOS usage details. To play a custom sound, `soundEnabled` must be set to `true`.
     */
    public string $soundName;
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\ValidityPeriod $validityPeriod;
    /**
     * Notification vibration (Android only).
     */
    public bool $vibrationEnabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'badge' => is_int($value) ? $this->badge = $value : parent::assignMember($name, $value),
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'category' => is_string($value) ? $this->category = $value : parent::assignMember($name, $value),
            'contentAvailable' => is_bool($value) ? $this->contentAvailable = $value : parent::assignMember($name, $value),
            'deliveryTimeWindow' => $value instanceof \stdClass ? $this->deliveryTimeWindow = new \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\DeliveryTimeWindow($value) : parent::assignMember($name, $value),
            'inboxMessageExpirationPeriod' => is_int($value) ? $this->inboxMessageExpirationPeriod = $value : parent::assignMember($name, $value),
            'inboxMessageExpirationTimeUnit' => is_string($value) ? $this->inboxMessageExpirationTimeUnit = \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushOutboundContentOptionsInboxMessageExpirationTimeUnit::from($value) : parent::assignMember($name, $value),
            'inboxTopic' => is_string($value) ? $this->inboxTopic = $value : parent::assignMember($name, $value),
            'isSilent' => is_bool($value) ? $this->isSilent = $value : parent::assignMember($name, $value),
            'mirroredPushDismissTitle' => is_string($value) ? $this->mirroredPushDismissTitle = $value : parent::assignMember($name, $value),
            'mirroredPushExpirationPeriod' => is_int($value) ? $this->mirroredPushExpirationPeriod = $value : parent::assignMember($name, $value),
            'mirroredPushExpirationTimeUnit' => is_string($value) ? $this->mirroredPushExpirationTimeUnit = \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushOutboundContentOptionsInAppExpirationTimeUnit::from($value) : parent::assignMember($name, $value),
            'mirroredPushOpenTitle' => is_string($value) ? $this->mirroredPushOpenTitle = $value : parent::assignMember($name, $value),
            'mirroredPushStyle' => is_string($value) ? $this->mirroredPushStyle = \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushOutboundContentOptionsInAppStyle::from($value) : parent::assignMember($name, $value),
            'onTapButtonAction' => $value instanceof \stdClass ? $this->onTapButtonAction = new \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PrimaryButtonAction($value) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\Platform($value) : parent::assignMember($name, $value),
            'sendAt' => is_string($value) ? $this->sendAt = $value : parent::assignMember($name, $value),
            'showMirroredPush' => is_bool($value) ? $this->showMirroredPush = $value : parent::assignMember($name, $value),
            'soundEnabled' => is_bool($value) ? $this->soundEnabled = $value : parent::assignMember($name, $value),
            'soundName' => is_string($value) ? $this->soundName = $value : parent::assignMember($name, $value),
            'validityPeriod' => $value instanceof \stdClass ? $this->validityPeriod = new \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\ValidityPeriod($value) : parent::assignMember($name, $value),
            'vibrationEnabled' => is_bool($value) ? $this->vibrationEnabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
