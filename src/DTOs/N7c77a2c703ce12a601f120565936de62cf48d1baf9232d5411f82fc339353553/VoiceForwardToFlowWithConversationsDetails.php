<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * VoiceForwardToFlowWithConversationsDetails
 */
final class VoiceForwardToFlowWithConversationsDetails extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\VoiceActionDetails
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $flowCampaignId;
    public string $flowId;
    public string $flowStateId;
    public string $flowVersionId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'flowCampaignId' => is_string($value) ? $this->flowCampaignId = $value : parent::assignMember($name, $value),
            'flowId' => is_string($value) ? $this->flowId = $value : parent::assignMember($name, $value),
            'flowStateId' => is_string($value) ? $this->flowStateId = $value : parent::assignMember($name, $value),
            'flowVersionId' => is_string($value) ? $this->flowVersionId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
