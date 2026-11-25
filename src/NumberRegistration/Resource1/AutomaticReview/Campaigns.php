<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\AutomaticReview;

final class Campaigns extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/automatic-review/campaigns/{campaignUuid} [operationId: submit-existing-campaign-for-ai-review] */
    /**
     * Submit Existing Campaign for AI Review
     *
     * Submits an existing campaign for automatic AI compliance review. Returns a request UUID that can be used to fetch the review results. Contact your account manager to learn more.
     */
    public static function postByCampaignUuid(string $campaignUuid): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ReviewSubmissionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\AutomaticReview\Campaigns::class)->postByCampaignUuid($campaignUuid);
    }
}
