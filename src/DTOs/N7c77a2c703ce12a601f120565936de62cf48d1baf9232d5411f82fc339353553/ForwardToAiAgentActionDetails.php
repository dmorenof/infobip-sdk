<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * ForwardToAiAgentActionDetails
 */
final class ForwardToAiAgentActionDetails extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\VoiceActionDetails
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Format: int64
     */
    public int $voiceAgentConfigurationId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'voiceAgentConfigurationId' => is_int($value) ? $this->voiceAgentConfigurationId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
