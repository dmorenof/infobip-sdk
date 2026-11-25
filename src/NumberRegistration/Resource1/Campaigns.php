<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1;

final class Campaigns extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-registration/1/campaigns [operationId: get-campaigns] */
    /**
     * Get Campaigns
     *
     * Gets a page of campaigns, using query parameters to filter results.
     */
    public static function get(?\InfobipSDK\GetParams\NumberRegistration\Resource1\Campaigns $params = null): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PageResponseCampaign
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns::class)->get($params);
    }

    /** POST /number-registration/1/campaigns [operationId: create-campaign] */
    /**
     * Create Campaign
     *
     * Creates a campaign within the Infobip platform. This operation does not register the campaign with any networks. Registration can be done using created campaign's ID with the 'Register Campaign' endpoint.
     */
    public static function post(\InfobipSDK\PostParams\NumberRegistration\Resource1\Campaigns $params): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Campaign
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns::class)->post($params);
    }

    /** DELETE /number-registration/1/campaigns/{campaignId} [operationId: delete-campaign] */
    /**
     * Delete Campaign
     *
     * Removes a previously created campaign by its ID.
     * This operation is only supported for campaigns that are in DRAFT, DEREGISTERED, REJECTED or REJECTED_EXTERNALLY stage.
     *
     */
    public static function deleteByCampaignId(string $campaignId): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns::class)->deleteByCampaignId($campaignId);
    }

    /** GET /number-registration/1/campaigns/{campaignId} [operationId: get-campaign] */
    /**
     * Get Campaign
     *
     * Retrieves a previously created campaign by its ID.
     */
    public static function getByCampaignId(string $campaignId): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Campaign
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns::class)->getByCampaignId($campaignId);
    }

    /** PUT /number-registration/1/campaigns/{campaignId} [operationId: update-campaign] */
    /**
     * Update Campaign
     *
     * Updates a campaign that has not yet been registered within the Infobip platform or has been rejected by Infobip. This operation is only supported for campaigns that are in DRAFT or REJECTED stage.
     */
    public static function putByCampaignId(string $campaignId, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Campaign $payload): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Campaign
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns::class)->putByCampaignId($campaignId, $payload);
    }

}
