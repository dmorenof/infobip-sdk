<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * OptionWithFileOrTtsAudioSourceApiModel
 *
 * File audio source or TTS audio source information.
 */
final class OptionWithFileOrTtsAudioSourceApiModel extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
    'Audio source type' => 'AudioSourceType',
];
    protected const array WIRE_PROPERTY_MAP = [
    'AudioSourceType' => 'Audio source type',
];

    public \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AudioSourceTypeApiModel $AudioSourceType;
    public bool $enabled;
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\FileAudioSourceApiModel $fileAudioSource;
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TtsAudioSourceApiModel $ttsAudioSource;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Audio source type' => is_string($value) ? $this->AudioSourceType = \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AudioSourceTypeApiModel::from($value) : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'fileAudioSource' => $value instanceof \stdClass ? $this->fileAudioSource = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\FileAudioSourceApiModel($value) : parent::assignMember($name, $value),
            'ttsAudioSource' => $value instanceof \stdClass ? $this->ttsAudioSource = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TtsAudioSourceApiModel($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
