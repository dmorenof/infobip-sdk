<?php

declare(strict_types=1);

namespace InfobipSDK\Messenger\Resource1;

final class Campaigns extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /messenger/1/campaigns [operationId: get-messenger-campaigns] */
    /**
     * Get campaigns
     *
     * Returns all Facebook Messenger marketing campaigns for the authenticated account.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public static function get(): \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\GetCampaignsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\Campaigns::class)->get();
    }

    /** POST /messenger/1/campaigns [operationId: create-messenger-campaign] */
    /**
     * Create campaign
     *
     * Create a new Facebook Messenger marketing campaign to send marketing messages to opted-in users. The campaign is associated with your ad account and Facebook page.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public static function post(\InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\CampaignRequest $payload): \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\CampaignResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\Campaigns::class)->post($payload);
    }

    /** DELETE /messenger/1/campaigns/{campaignId} [operationId: delete-messenger-campaign] */
    /**
     * Delete campaign
     *
     * Delete an existing Facebook Messenger marketing campaign.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public static function deleteByCampaignId(string $campaignId): void
    {
        self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\Campaigns::class)->deleteByCampaignId($campaignId);
    }

}
