<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * FilePlayContent
 *
 * Plays an audio file previously uploaded to Infobip storage.
 */
final class FilePlayContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'fileId',
    'type',
];

    protected const array VALIDATION = [
    'fileId' => [
        'minLength' => 1,
    ],
];

    /**
     * Identifier of the audio file stored in Infobip storage.
     */
    public string $fileId {
        set {
            $this->assigning('fileId', $value);
            $this->fileId = $value;
        }
    }
    /**
     * Content type discriminator.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\FilePlayContent\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileId' => is_string($value) ? $this->fileId = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\FilePlayContent\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
