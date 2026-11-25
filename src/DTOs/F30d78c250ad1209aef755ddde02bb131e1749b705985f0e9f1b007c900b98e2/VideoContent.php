<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * VideoContent
 *
 * The content object to build a message that will be sent.
 */
final class VideoContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'mediaUrl',
];

    protected const array VALIDATION = [
    'caption' => [
        'minLength' => 0,
        'maxLength' => 3000,
    ],
    'mediaUrl' => [
        'minLength' => 1,
        'maxLength' => 2048,
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
];

    /**
     * Caption of the video.
     */
    public string $caption {
        set {
            $this->assigning('caption', $value);
            $this->caption = $value;
        }
    }
    /**
     * URL of a video sent in a WhatsApp message. Must be a valid URL starting with `https://` or `http://`. Supported video types are `MP4`, `3GPP`. Maximum video size is 16MB.
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
            'caption' => is_string($value) ? $this->caption = $value : parent::assignMember($name, $value),
            'mediaUrl' => is_string($value) ? $this->mediaUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
