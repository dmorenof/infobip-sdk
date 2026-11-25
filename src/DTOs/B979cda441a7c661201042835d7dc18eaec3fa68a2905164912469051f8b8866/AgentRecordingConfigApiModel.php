<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * AgentRecordingConfigApiModel
 * Example: {"agentId":"05261D01CC88F5A8C0C7C3A1EF74E430","inbound":true,"outbound":true,"mediaType":"AUDIO_AND_VIDEO","useDefault":true,"enabled":false,"enabledChangedAt":1622024333000}
 */
final class AgentRecordingConfigApiModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'agentId',
        'mediaType',
    ];

    protected const array READ_ONLY_FIELDS = [
        'agentId',
        'enabledChangedAt',
    ];

    /**
     * ID of the agent to which the recording configuration belongs.
     */
    public string $agentId;
    public bool $enabled;
    /**
     * Format: int64
     */
    public int $enabledChangedAt;
    /**
     * Inbound record call direction enabled. At least one of the parameters 'inbound' or 'outbound' must be set to true.
     */
    public bool $inbound;
    public \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\MediaTypeApiModel $mediaType;
    /**
     * Outbound record call direction enabled. At least one of the parameters 'inbound' or 'outbound' must be set to true.
     */
    public bool $outbound;
    /**
     * Use account recording config as default.
     */
    public bool $useDefault;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agentId' => is_string($value) ? $this->agentId = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'enabledChangedAt' => is_int($value) ? $this->enabledChangedAt = $value : parent::assignMember($name, $value),
            'inbound' => is_bool($value) ? $this->inbound = $value : parent::assignMember($name, $value),
            'mediaType' => is_string($value) ? $this->mediaType = \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\MediaTypeApiModel::from($value) : parent::assignMember($name, $value),
            'outbound' => is_bool($value) ? $this->outbound = $value : parent::assignMember($name, $value),
            'useDefault' => is_bool($value) ? $this->useDefault = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
