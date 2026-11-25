<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * UrlAudioContent
 *
 * Audio content from a URL. Use this when the audio file is hosted at an external URL.
 */
final class UrlAudioContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fileUrl',
        'type',
    ];

    protected const array VALIDATION = [
        'fileUrl' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Audio file URL.
     */
    public string $fileUrl {
        set {
            $this->assigning('fileUrl', $value);
            $this->fileUrl = $value;
        }
    }
    public \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AudioContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileUrl' => is_string($value) ? $this->fileUrl = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AudioContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
