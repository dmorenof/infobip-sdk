<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1;

final class CampaignBuilder extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/campaign-builder [operationId: start-campaign-builder] */
    /**
     * Start Campaign Builder
     *
     * Submits a request to build a campaign based on the provided brand and campaign information.
     * Returns a request UUID that can be used to track the job status.
     */
    public static function post(\InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderRequest $payload): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\CampaignBuilder::class)->post($payload);
    }

    /** GET /number-registration/1/campaign-builder/{requestUuid} [operationId: get-campaign-builder-results] */
    /**
     * Get Campaign Builder Results
     *
     * Retrieves the results of a campaign builder by its request UUID.
     * The result structure varies based on the campaign type used when starting the builder.
     */
    public static function getByRequestUuid(string $requestUuid): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderResult
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\CampaignBuilder::class)->getByRequestUuid($requestUuid);
    }

}
