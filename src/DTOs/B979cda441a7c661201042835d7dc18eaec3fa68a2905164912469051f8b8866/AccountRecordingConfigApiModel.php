<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * AccountRecordingConfigApiModel
 * Example: {"inbound":true,"outbound":true,"autoCompose":false,"mediaType":"AUDIO_AND_VIDEO","videoDownloadPreparation":false,"enabled":true,"enabledChangedAt":1622024333000}
 */
final class AccountRecordingConfigApiModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'mediaType',
    ];

    protected const array READ_ONLY_FIELDS = [
        'enabledChangedAt',
    ];

    /**
     * Enables composition of call recordings. If set to true, the call recording will be merged into a single audio or video file.
     */
    public bool $autoCompose;
    public bool $enabled;
    /**
     * Format: int64
     */
    public int $enabledChangedAt;
    /**
     * Enables inbound call recording. At least one of the parameters 'inbound' or 'outbound' must be set to true.
     */
    public bool $inbound;
    public \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\MediaTypeApiModel $mediaType;
    /**
     * Enables outbound call recording. At least one of the parameters 'inbound' or 'outbound' must be set to true.
     */
    public bool $outbound;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'autoCompose' => is_bool($value) ? $this->autoCompose = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'enabledChangedAt' => is_int($value) ? $this->enabledChangedAt = $value : parent::assignMember($name, $value),
            'inbound' => is_bool($value) ? $this->inbound = $value : parent::assignMember($name, $value),
            'mediaType' => is_string($value) ? $this->mediaType = \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\MediaTypeApiModel::from($value) : parent::assignMember($name, $value),
            'outbound' => is_bool($value) ? $this->outbound = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
