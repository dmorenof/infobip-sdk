<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource1;

final class FeedbackErrors extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /resources/1/feedback-errors [operationId: get-feedback-errors] */
    /**
     * Get feedback errors
     *
     * Retrieves all available feedback errors.
     */
    public static function get(): \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FeedbackErrors
    {
        return self::client()->resource(\InfobipSDK\Resources\Resources\Resource1\FeedbackErrors::class)->get();
    }
}
