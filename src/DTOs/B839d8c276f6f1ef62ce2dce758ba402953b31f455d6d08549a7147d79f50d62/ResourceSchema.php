<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * ResourceSchema
 *
 * Resource object describing the media.
 */
final class ResourceSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'url',
];

    protected const array VALIDATION = [
    'url' => [
        'minLength' => 1,
        'maxLength' => 2048,
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
];

    /**
     * URL of the given resource. The following content types are supported: `image/jpeg`, `image/jpg`, `image/gif`, `image/png`, `audio/aac`, `audio/mp3`, `audio/mpeg`, `audio/mpg`, `audio/mp4`, `audio/mp4-latm`, `audio/3gpp`, `application/ogg`, `audio/ogg`, `video/h263`, `video/m4v`, `video/mp4`, `video/mpeg`, `video/mpeg4`, `video/webm`, `application/pdf`. Should start with `http://` or `https://`. Up to 100 MB.
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
