<?php

declare(strict_types=1);

namespace InfobipSDK\Vocalize\Resource2\Campaigns;

final class Me extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /vocalize/2/campaigns/me [operationId: vocalize-get-my-campaigns] */
    /**
     * Get my campaigns
     *
     * Get all campaigns for the authenticated user.
     */
    public static function get(?\InfobipSDK\GetParams\Vocalize\Resource2\Campaigns\Me $params = null): \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignListResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Vocalize\Resource2\Campaigns\Me::class)->get($params);
    }
}
