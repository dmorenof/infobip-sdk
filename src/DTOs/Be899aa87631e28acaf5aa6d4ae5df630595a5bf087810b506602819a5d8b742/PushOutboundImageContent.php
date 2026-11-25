<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushOutboundImageContent
 */
final class PushOutboundImageContent extends \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushOutboundContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'text' => [
            'minLength' => 1,
            'maxLength' => 4000,
        ],
        'title' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'url' => [
            'minLength' => 1,
            'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Text of the message that will be sent.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
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
     * URL of the image displayed in the notification. Rich push notifications are available on devices with [iOS](https://github.com/infobip/mobile-messaging-sdk-ios/wiki/Rich-notifications) 10 and [Android](https://github.com/infobip/mobile-messaging-sdk-android/wiki/Rich-notifications) 4.1.+. Supported on iOS since MM SDK version 2.5.8. Supported on Android since MM SDK version 1.6.4.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
