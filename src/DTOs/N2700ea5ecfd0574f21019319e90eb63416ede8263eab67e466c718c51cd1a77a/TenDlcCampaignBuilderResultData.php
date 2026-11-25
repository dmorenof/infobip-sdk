<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * TenDlcCampaignBuilderResultData
 *
 * Campaign builder result for 10DLC campaigns.
 */
final class TenDlcCampaignBuilderResultData extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderResultData
{
    public const array REQUIRED_FIELDS = [];

    protected const array WRITE_ONLY_FIELDS = [
        'privacyPolicy',
        'termsConditions',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TenDlcCampaignBuilderResultMessageFlow $messageFlow;
    public string $privacyPolicy;
    public string $termsConditions;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TenDlcUseCase $useCase;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageFlow' => $value instanceof \stdClass ? $this->messageFlow = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TenDlcCampaignBuilderResultMessageFlow($value) : parent::assignMember($name, $value),
            'privacyPolicy' => is_string($value) ? $this->privacyPolicy = $value : parent::assignMember($name, $value),
            'termsConditions' => is_string($value) ? $this->termsConditions = $value : parent::assignMember($name, $value),
            'useCase' => is_string($value) ? $this->useCase = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TenDlcUseCase::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
