<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Campaigns\ByCampaignId;

final class RemoveNumbers extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/campaigns/{campaignId}/remove-numbers [operationId: remove-numbers] */
    /**
     * Remove Numbers from Registered Campaign
     *
     * Removes numbers from campaign that has already been registered. If the campaign registration has not been completed or numbers size exceeds the limit, attempting to update via this api will result in a 400 Bad Request.
     */
    public static function post(string $campaignId, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\UpdateCampaignRegistrationRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId\RemoveNumbers::class)->post($campaignId, $payload);
    }
}
