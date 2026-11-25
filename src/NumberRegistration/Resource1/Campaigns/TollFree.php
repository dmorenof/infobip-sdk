<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Campaigns;

final class TollFree extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/campaigns/toll-free [operationId: create-toll-free-campaign] */
    /**
     * Create Toll Free Campaign
     *
     * Creates a toll free campaign within the Infobip platform.
     */
    public static function post(\InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeUnifiedNumberCampaignApiModel $payload): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeUnifiedNumberCampaignApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\TollFree::class)->post($payload);
    }
}
