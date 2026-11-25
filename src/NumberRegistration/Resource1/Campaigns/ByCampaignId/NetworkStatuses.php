<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Campaigns\ByCampaignId;

final class NetworkStatuses extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-registration/1/campaigns/{campaignId}/network-statuses [operationId: get-campaign-network-statuses] */
    /**
     * Get Campaign Network Statuses
     *
     * Retrieves status of a registered campaign for each network.
     */
    public static function get(string $campaignId): \InfobipSDK\Collections\NumberRegistration\Resource1\Campaigns\ByCampaignId\NetworkStatuses\Get\ByCampaignIdNetworkStatusesCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId\NetworkStatuses::class)->get($campaignId);
    }
}
