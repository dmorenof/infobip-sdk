<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PrimaryButtonAction
 *
 * Defines which action to perform on notification tap or on in-app notification primary button tap. More information for [Android](https://github.com/infobip/mobile-messaging-sdk-android/wiki/How-to-define-specific-action-on-notification-or-in-app-primary-button-tap(open-url,-deeplink)%3F), [iOS](https://github.com/infobip/mobile-messaging-sdk-ios/wiki/How-to-define-specific-action-on-notification-or-in-app-primary-button-tap(open-url,-deeplink)%3F), [Cordova](https://github.com/infobip/mobile-messaging-cordova-plugin/wiki/How-to-define-specific-action-on-notification-or-in-app-primary-button-tap(open-url,-deeplink)%3F), [React Native](https://github.com/infobip/mobile-messaging-react-native-plugin/wiki/How-to-define-specific-action-on-notification-or-in-app-primary-button-tap(open-url,-deeplink)%3F).
 */
final class PrimaryButtonAction extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Defines which URL or path should be opened. Must be a valid `http://` or `https://` URL when `type` is `WEB_VIEW_URL` or `OPEN_URL_IN_BROWSER`.
     */
    public string $resource;
    public \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PrimaryButtonActionType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'resource' => is_string($value) ? $this->resource = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PrimaryButtonActionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
