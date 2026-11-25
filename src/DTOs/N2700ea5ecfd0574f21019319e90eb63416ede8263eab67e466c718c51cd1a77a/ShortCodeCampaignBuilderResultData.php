<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * ShortCodeCampaignBuilderResultData
 *
 * Campaign builder result for Short Code campaigns.
 */
final class ShortCodeCampaignBuilderResultData extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderResultData
{
    public const array REQUIRED_FIELDS = [];

    protected const array WRITE_ONLY_FIELDS = [
    'privacyPolicy',
    'termsConditions',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Call-to-action suggestions.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ShortCodeCampaignBuilderResultData\CtaCollection $cta;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ShortCodeCampaignBuilderResultMessageFlow $messageFlow;
    public string $privacyPolicy;
    public string $termsConditions;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ShortCodeUseCase $useCase;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cta' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->cta = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ShortCodeCampaignBuilderResultData\CtaCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderResultCta::class)) : parent::assignMember($name, $value),
            'messageFlow' => $value instanceof \stdClass ? $this->messageFlow = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ShortCodeCampaignBuilderResultMessageFlow($value) : parent::assignMember($name, $value),
            'privacyPolicy' => is_string($value) ? $this->privacyPolicy = $value : parent::assignMember($name, $value),
            'termsConditions' => is_string($value) ? $this->termsConditions = $value : parent::assignMember($name, $value),
            'useCase' => is_string($value) ? $this->useCase = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ShortCodeUseCase::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
