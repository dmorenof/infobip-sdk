<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * FreeFormVideo
 *
 * Free form video content.
 */
final class FreeFormVideo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'videoUrl',
    ];

    protected const array VALIDATION = [
        'thumbnailUrl' => [
            'minLength' => 0,
            'maxLength' => 500,
            'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
        ],
        'videoUrl' => [
            'minLength' => 0,
            'maxLength' => 500,
            'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
        ],
    ];

    /**
     * URL to thumbnail of the video. Must be a valid URL from Kakao image API.
     */
    public string $thumbnailUrl {
        set {
            $this->assigning('thumbnailUrl', $value);
            $this->thumbnailUrl = $value;
        }
    }
    /**
     * URL to video. Must be a valid URL starting with `https://` or `http://`.
     */
    public string $videoUrl {
        set {
            $this->assigning('videoUrl', $value);
            $this->videoUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'thumbnailUrl' => is_string($value) ? $this->thumbnailUrl = $value : parent::assignMember($name, $value),
            'videoUrl' => is_string($value) ? $this->videoUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
