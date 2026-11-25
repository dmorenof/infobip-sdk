<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * Profile
 *
 * Notification profile object holding settings for your webhook URL and a reference to security settings.
 */
final class IdOnlyProfileRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'profileId',
];

    protected const array VALIDATION = [
    'profileId' => [
        'minLength' => 1,
        'maxLength' => 255,
    ],
];

    /**
     * ID of a notification profile. You can provide this ID if you want to associate your subscription with a different notification profile.
     */
    public string $profileId {
        set {
            $this->assigning('profileId', $value);
            $this->profileId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'profileId' => is_string($value) ? $this->profileId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
