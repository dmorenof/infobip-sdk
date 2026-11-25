<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Campaigns\ByCampaignId;

final class AddNumbers extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/campaigns/{campaignId}/add-numbers [operationId: add-numbers] */
    /**
     * Add Numbers to Registered Campaign
     *
     * Adds numbers to campaign that has already been registered. If the campaign registration has not been completed or numbers size exceeds the limit, attempting to update via this api will result in a 400 Bad Request. Numbers which require OSR to be updated in advance could be identified by using Numbers API's "List owned number" GET endpoint.
     */
    public static function post(string $campaignId, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\UpdateCampaignRegistrationRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId\AddNumbers::class)->post($campaignId, $payload);
    }
}
