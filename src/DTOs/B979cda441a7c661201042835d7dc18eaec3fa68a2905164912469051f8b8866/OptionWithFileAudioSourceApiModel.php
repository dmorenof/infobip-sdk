<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * OptionWithFileAudioSourceApiModel
 *
 * File audio source information.
 */
final class OptionWithFileAudioSourceApiModel extends \Dmorenof\SdkRuntime\DTO
{
    public bool $enabled;
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\FileAudioSourceApiModel $fileAudioSource;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'fileAudioSource' => $value instanceof \stdClass ? $this->fileAudioSource = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\FileAudioSourceApiModel($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
