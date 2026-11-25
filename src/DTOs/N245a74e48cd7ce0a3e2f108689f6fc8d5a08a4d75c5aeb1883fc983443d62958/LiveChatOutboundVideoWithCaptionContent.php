<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatOutboundVideoWithCaptionContent
 */
final class LiveChatOutboundVideoWithCaptionContent extends \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'caption' => [
        'minLength' => 0,
        'maxLength' => 3000,
    ],
    'url' => [
        'minLength' => 0,
        'maxLength' => 2048,
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Media caption.
     */
    public string $caption {
        set {
            $this->assigning('caption', $value);
            $this->caption = $value;
        }
    }
    /**
     * Media download URL.
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
            'caption' => is_string($value) ? $this->caption = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
