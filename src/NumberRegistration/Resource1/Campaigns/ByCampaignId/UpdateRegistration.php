<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Campaigns\ByCampaignId;

final class UpdateRegistration extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/campaigns/{campaignId}/update-registration [operationId: update-registered-campaign] */
    /**
     * Update Registered Campaign
     *
     * Updates a campaign that has already been registered. If the campaign registration has not been completed, attempting to update via this api will result in a 400 Bad Request. Numbers which require OSR to be updated in advance could be identified by using Numbers API's "List owned number" GET endpoint.
     */
    public static function post(string $campaignId, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\UpdateCampaignRegistrationRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId\UpdateRegistration::class)->post($campaignId, $payload);
    }
}
