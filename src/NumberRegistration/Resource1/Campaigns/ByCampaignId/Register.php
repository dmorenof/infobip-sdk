<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Campaigns\ByCampaignId;

final class Register extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/campaigns/{campaignId}/register [operationId: register-campaign] */
    /**
     * Submit Campaign
     *
     * Submits the campaign with the given ID for Infobip review. If a campaign gets approved by Infobip, it will get registered with carriers, and submitted for underlying connectivity provider's review. Each registered campaign incurs a cost, consult your contract for pricing information.
     * Documentation: https://www.infobip.com/docs/10dlc/10dlc-registration
     */
    public static function post(string $campaignId, ?\InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\RegisterCampaignRequest $payload = null): void
    {
        if (func_num_args() <= 1) {
            self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId\Register::class)->post($campaignId);
            return;
        }
        self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId\Register::class)->post($campaignId, $payload);
    }

}
