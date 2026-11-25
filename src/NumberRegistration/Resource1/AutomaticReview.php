<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1;

final class AutomaticReview extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/automatic-review [operationId: submit-campaign-info-for-ai-review] */
    /**
     * Submit Campaign Info for AI Review
     *
     * Submits new campaign information for automatic AI compliance review. Returns a request UUID that can be used to fetch the review results. Contact your account manager to learn more.
     */
    public static function post(\InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignInfoReviewRequest $payload): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ReviewSubmissionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\AutomaticReview::class)->post($payload);
    }

    /** GET /number-registration/1/automatic-review/{requestUuid} [operationId: get-ai-review-results] */
    /**
     * Get AI Review Results
     *
     * Retrieves the results of a campaign AI compliance review by its request UUID. Contact your account manager to learn more.
     */
    public static function getByRequestUuid(string $requestUuid): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalAutomaticReviewResults
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\AutomaticReview::class)->getByRequestUuid($requestUuid);
    }

}
