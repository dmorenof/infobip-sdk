<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Campaigns;

final class Priorities extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-registration/1/campaigns/priorities [operationId: get-campaign-priorities] */
    /**
     * Get Campaign Priorities
     *
     * Retrieves campaign priority levels for your account(if applicable). Please contact your account manager to learn more about priorities.
     */
    public static function get(): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Priority
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\Priorities::class)->get();
    }
}
