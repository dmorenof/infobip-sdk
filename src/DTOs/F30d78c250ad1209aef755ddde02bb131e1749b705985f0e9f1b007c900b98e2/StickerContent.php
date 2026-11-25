<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * StickerContent
 *
 * The content object to build a message that will be sent.
 */
final class StickerContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'mediaUrl',
];

    protected const array VALIDATION = [
    'mediaUrl' => [
        'minLength' => 1,
        'maxLength' => 2048,
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
];

    /**
     * URL of a sticker sent in a WhatsApp message. Must be a valid URL starting with `https://` or `http://`. Supported sticker type is `WebP`. Sticker file should be 512x512 pixels. Maximum size is 100KB for static sticker and 500KB for animated sticker.
     */
    public string $mediaUrl {
        set {
            $this->assigning('mediaUrl', $value);
            $this->mediaUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mediaUrl' => is_string($value) ? $this->mediaUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
