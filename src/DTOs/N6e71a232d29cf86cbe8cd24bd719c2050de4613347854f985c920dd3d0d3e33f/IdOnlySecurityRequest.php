<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * Security
 *
 * Security settings object holding authentication settings necessary to access your webhook.
 */
final class IdOnlySecurityRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'authId',
    ];

    protected const array VALIDATION = [
        'authId' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
    ];

    /**
     * Unique security setting ID. You can provide this ID if you want to associate your subscription with a different notification profile.
     */
    public string $authId {
        set {
            $this->assigning('authId', $value);
            $this->authId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authId' => is_string($value) ? $this->authId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
