<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Campaigns\ByCampaignId\NumberPool;

final class Detach extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/campaigns/{campaignId}/number-pool/detach [operationId: detach-number-pool] */
    /**
     * Detach Number Pool from Campaign
     *
     * Detaches an existing number pool from the specified campaign. This operation is subject to validation: the campaign must have fewer than 50 assigned numbers at the time of detachment.
     */
    public static function post(string $campaignId): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId\NumberPool\Detach::class)->post($campaignId);
    }

}
