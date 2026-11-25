<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * UrlPlayContent
 *
 * Plays an audio file fetched from a remote URL.
 */
final class UrlPlayContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'fileUrl',
    'type',
];

    protected const array VALIDATION = [
    'cacheDuration' => [
        'minimum' => 0,
        'maximum' => 86400,
        'exclusiveMinimum' => 0,
        'format' => 'int32',
    ],
    'fileUrl' => [
        'minLength' => 1,
    ],
];

    /**
     * How long, in seconds, the fetched file may be cached (1 to 86400).
     * Format: int32
     */
    public int $cacheDuration {
        set {
            $this->assigning('cacheDuration', $value);
            $this->cacheDuration = $value;
        }
    }
    /**
     * URL of the remote audio file to play.
     */
    public string $fileUrl {
        set {
            $this->assigning('fileUrl', $value);
            $this->fileUrl = $value;
        }
    }
    /**
     * Content type discriminator.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\UrlPlayContent\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cacheDuration' => is_int($value) ? $this->cacheDuration = $value : parent::assignMember($name, $value),
            'fileUrl' => is_string($value) ? $this->fileUrl = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\UrlPlayContent\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
