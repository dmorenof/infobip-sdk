<?php

declare(strict_types=1);

namespace InfobipSDK\Vocalize\Resource2;

final class Scores extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PUT /vocalize/2/scores [operationId: vocalize-submit-entry] */
    /**
     * Update score
     *
     * This endpoint allows users to create or update their score for a specific campaign. If it is the first attempt of the user, the name parameter can be omited.
     */
    public static function put(\InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\ScoreBase $payload): \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\ScoreResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Vocalize\Resource2\Scores::class)->put($payload);
    }
}
