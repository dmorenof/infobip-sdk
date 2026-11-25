<?php

declare(strict_types=1);

namespace InfobipSDK\Vocalize\Resource2;

final class Campaigns extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /vocalize/2/campaigns [operationId: vocalize-create-campaign] */
    /**
     * Create campaign
     *
     * Create a new campaign with the specified parameters.
     */
    public static function post(\InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignCreatePayload $payload): \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Vocalize\Resource2\Campaigns::class)->post($payload);
    }

    /** DELETE /vocalize/2/campaigns/{campaignId} [operationId: vocalize-delete-campaign] */
    /**
     * Delete campaign
     *
     * Delete a campaign with the specified ID.
     */
    public static function deleteByCampaignId(string $campaignId): void
    {
        self::client()->resource(\InfobipSDK\Resources\Vocalize\Resource2\Campaigns::class)->deleteByCampaignId($campaignId);
    }

    /** GET /vocalize/2/campaigns/{campaignId} [operationId: vocalize-get-campaign] */
    /**
     * Get campaign
     *
     * Get a campaign by its ID.
     */
    public static function getByCampaignId(string $campaignId): \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Vocalize\Resource2\Campaigns::class)->getByCampaignId($campaignId);
    }

}
