<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Campaigns\ByCampaignId;

final class Deregister extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/campaigns/{campaignId}/deregister [operationId: deregister-campaign] */
    /**
     * Deregister Campaign
     *
     * Deregisters the campaign with the given ID with all available networks.
     */
    public static function post(string $campaignId): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId\Deregister::class)->post($campaignId);
    }

}
