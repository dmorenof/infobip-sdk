<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * ChannelVoiceSetup
 *
 * Voice setup on a number. `channel` selects which channel the setup applies to and which action types are available.
 */
final class ChannelVoiceSetup extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\VoiceActionDetails $action;
    /**
     * ID of the Application that would be associated with the voice setup.
     */
    public string $applicationId;
    /**
     * Channel the voice setup belongs to.
     */
    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ChannelVoiceSetup\ChannelEnum $channel;
    /**
     * ID of the Entity that would be associated with the voice setup.
     */
    public string $entityId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ChannelVoiceSetup\ChannelEnum::from($value) : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
