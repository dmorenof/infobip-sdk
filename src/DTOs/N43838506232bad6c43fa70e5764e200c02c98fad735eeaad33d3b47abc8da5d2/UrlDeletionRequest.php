<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N43838506232bad6c43fa70e5764e200c02c98fad735eeaad33d3b47abc8da5d2;

/**
 * UrlDeletionRequest
 */
final class UrlDeletionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'url',
    ];

    protected const array VALIDATION = [
        'url' => [
            'minLength' => 1,
        ],
    ];

    /**
     * URL of the WhatsApp media to be deleted.
     * Example: "https://www.infobip.com/infobip-logo.png"
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
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
