<?php

declare(strict_types=1);

namespace InfobipSDK\Vocalize\Resource2\Campaigns\ByCampaignId;

final class Reset extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /vocalize/2/campaigns/{campaignId}/reset [operationId: vocalize-reset-campaign] */
    /**
     * Delete campaign scores
     *
     * Delete all scores and attempts for a campaign with the specified ID. This action cannot be undone.
     */
    public static function delete(string $campaignId): void
    {
        self::client()->resource(\InfobipSDK\Resources\Vocalize\Resource2\Campaigns\ByCampaignId\Reset::class)->delete($campaignId);
    }

}
