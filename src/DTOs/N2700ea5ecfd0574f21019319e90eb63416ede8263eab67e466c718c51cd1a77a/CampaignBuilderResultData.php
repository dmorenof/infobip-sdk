<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * CampaignBuilderResultData
 *
 * Campaign builder result data. The structure varies based on the campaign type.
 */
class CampaignBuilderResultData extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'campaignType';
    public const array DISCRIMINATOR_MAPPING = [
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.ShortCodeCampaignBuilderResultData' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\ShortCodeCampaignBuilderResultData',
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.TenDlcCampaignBuilderResultData' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TenDlcCampaignBuilderResultData',
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.TollFreeCampaignBuilderResultData' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TollFreeCampaignBuilderResultData',
    'SHORT_CODE' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\ShortCodeCampaignBuilderResultData',
    'TEN_DIGIT_LONG_CODE' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TenDlcCampaignBuilderResultData',
    'TOLL_FREE_NUMBER' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TollFreeCampaignBuilderResultData',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignType $campaignType;
    /**
     * Opt-in configuration.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderResultData\InMethodsCollection $optInMethods;
    /**
     * Privacy policy content sample.
     */
    public string $privacyPolicySample;
    /**
     * Terms and conditions content sample.
     */
    public string $termsConditionsSample;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'campaignType' => is_string($value) ? $this->campaignType = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignType::from($value) : parent::assignMember($name, $value),
            'optInMethods' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->optInMethods = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderResultData\InMethodsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderResultOptIn::class)) : parent::assignMember($name, $value),
            'privacyPolicySample' => is_string($value) ? $this->privacyPolicySample = $value : parent::assignMember($name, $value),
            'termsConditionsSample' => is_string($value) ? $this->termsConditionsSample = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
