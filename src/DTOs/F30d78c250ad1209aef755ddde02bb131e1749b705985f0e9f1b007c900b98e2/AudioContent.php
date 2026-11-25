<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * AudioContent
 *
 * The content object to build a message that will be sent.
 */
final class AudioContent extends \Dmorenof\SdkRuntime\DTO
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
     * URL of an audio sent in a WhatsApp message. Must be a valid URL starting with `https://` or `http://`. Supported audio types are `AAC`, `AMR`, `MP3`, `MP4`, `OPUS`. Maximum audio size is 16MB.
     */
    public string $mediaUrl {
        set {
            $this->assigning('mediaUrl', $value);
            $this->mediaUrl = $value;
        }
    }
    /**
     * When set to true, the audio message is displayed as a voice note. Voice notes require OGG format with OPUS codec. Maximum size is 16MB.
     */
    public bool $voice;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mediaUrl' => is_string($value) ? $this->mediaUrl = $value : parent::assignMember($name, $value),
            'voice' => is_bool($value) ? $this->voice = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
