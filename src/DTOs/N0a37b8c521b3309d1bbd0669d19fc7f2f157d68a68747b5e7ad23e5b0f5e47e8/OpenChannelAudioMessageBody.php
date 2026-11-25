<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8;

/**
 * OpenChannelAudioMessageBody
 */
final class OpenChannelAudioMessageBody extends \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelMessageBody
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'url' => [
        'minLength' => 1,
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * URL for media download.
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
