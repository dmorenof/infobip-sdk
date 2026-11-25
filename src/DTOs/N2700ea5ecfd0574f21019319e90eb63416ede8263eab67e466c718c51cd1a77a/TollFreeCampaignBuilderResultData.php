<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * TollFreeCampaignBuilderResultData
 *
 * Campaign builder result for Toll Free Number campaigns.
 */
final class TollFreeCampaignBuilderResultData extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderResultData
{
    public const array REQUIRED_FIELDS = [];

    protected const array WRITE_ONLY_FIELDS = [
        'privacyPolicy',
        'termsConditions',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Channel-specific note.
     */
    public string $channelNote;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeCampaignBuilderResultMessageFlow $messageFlow;
    public string $privacyPolicy;
    public string $termsConditions;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeUseCase $useCase;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channelNote' => is_string($value) ? $this->channelNote = $value : parent::assignMember($name, $value),
            'messageFlow' => $value instanceof \stdClass ? $this->messageFlow = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeCampaignBuilderResultMessageFlow($value) : parent::assignMember($name, $value),
            'privacyPolicy' => is_string($value) ? $this->privacyPolicy = $value : parent::assignMember($name, $value),
            'termsConditions' => is_string($value) ? $this->termsConditions = $value : parent::assignMember($name, $value),
            'useCase' => is_string($value) ? $this->useCase = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeUseCase::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
