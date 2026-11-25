<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * FileAudioContent
 *
 * Audio content from an uploaded file. Use this when the audio file has been uploaded to Infobip.
 */
final class FileAudioContent extends \Dmorenof\SdkRuntime\DTO
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
     * ID of uploaded file.
     */
    public string $fileId {
        set {
            $this->assigning('fileId', $value);
            $this->fileId = $value;
        }
    }
    public \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AudioContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileId' => is_string($value) ? $this->fileId = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AudioContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
