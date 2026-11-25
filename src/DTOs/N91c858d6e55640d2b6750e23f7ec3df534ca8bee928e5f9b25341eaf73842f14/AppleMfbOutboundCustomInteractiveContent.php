<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * AppleMfbOutboundCustomInteractiveContent
 */
final class AppleMfbOutboundCustomInteractiveContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'appIcon' => [
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
    'bundleIdentifier' => [
        'pattern' => '^com\\.apple\\.messages\\.MSMessageExtensionBalloonPlugin:[A-Z0-9]{10}:[-A-Za-z0-9.]+$',
    ],
];

    /**
     * URL of the PNG icon of the iMessage app, smaller than 15 kB. The Messages app displays it when the iMessage extension is not installed on the customer's device.
     */
    public string $appIcon {
        set {
            $this->assigning('appIcon', $value);
            $this->appIcon = $value;
        }
    }
    /**
     * App Store identifier of the iMessage app. If empty, the sender's iMessage app configuration is used. Required when the sender has no iMessage app configuration.
     */
    public string $appId;
    /**
     * Name of the iMessage app. If empty, the sender's iMessage app configuration is used. Required when the sender has no iMessage app configuration.
     */
    public string $appName;
    /**
     * Bundle identifier of the iMessage extension, in the format `com.apple.messages.MSMessageExtensionBalloonPlugin:{team-id}:{extension-id}`. If empty, the sender's iMessage app configuration is used. Required when the sender has no iMessage app configuration.
     */
    public string $bundleIdentifier {
        set {
            $this->assigning('bundleIdentifier', $value);
            $this->bundleIdentifier = $value;
        }
    }
    /**
     * Object describing received message bubble presented in Messages app.
     */
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundCustomInteractiveContent\ReceivedMessageDTO $receivedMessage;
    /**
     * Object describing reply message bubble presented in Messages app.
     */
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundCustomInteractiveContent\ReplyMessageDTO $replyMessage;
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundMessageContentType $type;
    /**
     * URL containing the data that the Messages app passes to the iMessage app. It can be a relative URL, for example `?orderId=1234`. If empty, the sender's iMessage app configuration is used. Required when the sender has no iMessage app configuration.
     */
    public string $url;
    /**
     * Determines whether the Messages app should use Live Layout, defaulting to `true`.
     */
    public bool $useLiveLayout;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appIcon' => is_string($value) ? $this->appIcon = $value : parent::assignMember($name, $value),
            'appId' => is_string($value) ? $this->appId = $value : parent::assignMember($name, $value),
            'appName' => is_string($value) ? $this->appName = $value : parent::assignMember($name, $value),
            'bundleIdentifier' => is_string($value) ? $this->bundleIdentifier = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundMessageContentType::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'useLiveLayout' => is_bool($value) ? $this->useLiveLayout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
