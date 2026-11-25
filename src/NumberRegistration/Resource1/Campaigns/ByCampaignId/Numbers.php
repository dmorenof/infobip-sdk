<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Campaigns\ByCampaignId;

final class Numbers extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-registration/1/campaigns/{campaignId}/numbers [operationId: get-campaign-numbers] */
    /**
     * Get Campaign numbers
     *
     * Retrieves all the numbers associated with a campaign, regardless of the stage, by its ID.
     */
    public static function get(string $campaignId): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPreviews
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId\Numbers::class)->get($campaignId);
    }

}
