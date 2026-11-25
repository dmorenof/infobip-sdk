<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * TollFreeCampaignBuilderRequest
 *
 * Request to start building Toll free campaign using AI assistant.
 */
final class TollFreeCampaignBuilderRequest extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderRequest
{
    public const array REQUIRED_FIELDS = [
        'brandId',
        'campaignIntent',
        'campaignType',
        'contactEmail',
        'optInMethods',
    ];

    protected const array VALIDATION = [
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
}
