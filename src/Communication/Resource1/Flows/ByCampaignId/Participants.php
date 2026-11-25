<?php

declare(strict_types=1);

namespace InfobipSDK\Communication\Resource1\Flows\ByCampaignId;

final class Participants extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /communication/1/flows/{campaignId}/participants [operationId: remove-people-from-flow] */
    /**
     * Remove person from flow
     *
     * Removes a participant with given identifier from the flow.
     */
    public static function delete(int $campaignId, ?\InfobipSDK\DeleteParams\Communication\Resource1\Flows\ByCampaignId\Participants $params = null): void
    {
        self::client()->resource(\InfobipSDK\Resources\Communication\Resource1\Flows\ByCampaignId\Participants::class)->delete($campaignId, $params);
    }

    /** POST /communication/1/flows/{campaignId}/participants [operationId: add-people-to-flow] */
    /**
     * Add Person to Flow
     *
     * Creates or updates a person and adds it to Flow
     *
     * @deprecated
     */
    public static function post(int $campaignId, ?\InfobipSDK\PostParams\Communication\Resource1\Flows\ByCampaignId\Participants $params = null): void
    {
        self::client()->resource(\InfobipSDK\Resources\Communication\Resource1\Flows\ByCampaignId\Participants::class)->post($campaignId, $params);
    }

}
