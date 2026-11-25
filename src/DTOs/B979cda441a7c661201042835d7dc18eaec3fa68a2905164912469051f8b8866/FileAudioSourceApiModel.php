<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * FileAudioSourceApiModel
 *
 * File audio source information.
 */
final class FileAudioSourceApiModel extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'fileDescriptor' => [
            'minLength' => 0,
            'maxLength' => 128,
        ],
    ];

    /**
     * File audio source descriptor.
     */
    public string $fileDescriptor {
        set {
            $this->assigning('fileDescriptor', $value);
            $this->fileDescriptor = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileDescriptor' => is_string($value) ? $this->fileDescriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
