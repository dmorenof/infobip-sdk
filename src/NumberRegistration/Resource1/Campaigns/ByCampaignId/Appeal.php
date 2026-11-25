<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Campaigns\ByCampaignId;

final class Appeal extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/campaigns/{campaignId}/appeal [operationId: appeal-campaign] */
    /**
     * Appeal Campaign
     *
     * Appeals a rejected 10DLC campaign within the Infobip platform. Campaigns are eligible for appeal if they were rejected within the past 3 months and can be appealed up to five times.
     */
    public static function post(string $campaignId, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\AppealRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId\Appeal::class)->post($campaignId, $payload);
    }
}
