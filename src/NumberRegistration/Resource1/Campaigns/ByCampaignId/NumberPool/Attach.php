<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Campaigns\ByCampaignId\NumberPool;

final class Attach extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/campaigns/{campaignId}/number-pool/attach [operationId: attach-number-pool] */
    /**
     * Attach Number Pool to Campaign
     *
     * Associates an existing number pool with a campaign. Number pooling is required when a campaign utilizes more than 49 numbers. This is common in high-throughput environments such as call centers. Attaching a number pool ensures proper provisioning and compliance with carrier requirements.
     */
    public static function post(string $campaignId, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\AttachNumberPoolRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId\NumberPool\Attach::class)->post($campaignId, $payload);
    }

}
