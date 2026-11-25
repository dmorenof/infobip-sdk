<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * TenDlcCampaignBuilderRequest
 *
 * Request to start building 10DLC campaign using AI assistant.
 */
final class TenDlcCampaignBuilderRequest extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderRequest
{
    public const array REQUIRED_FIELDS = [
    'brandId',
    'campaignIntent',
    'campaignType',
    'contactEmail',
    'optInMethods',
];

    protected const array VALIDATION = [
    'campaignAttributes' => [
        'uniqueItems' => true,
    ],
    'campaignIntent' => [
        'minLength' => 1,
    ],
    'contactEmail' => [
        'minLength' => 1,
    ],
    'optInMethods' => [
        'minItems' => 1,
        'uniqueItems' => true,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Campaign attributes indicating special content characteristics.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ShortCodeCampaignBuilderRequest\CampaignAttributesCollection $campaignAttributes {
        set {
            $this->assigning('campaignAttributes', $value);
            $this->campaignAttributes = $value;
        }
    }

}
