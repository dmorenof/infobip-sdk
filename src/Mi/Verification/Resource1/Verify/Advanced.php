<?php

declare(strict_types=1);

namespace InfobipSDK\Mi\Verification\Resource1\Verify;

final class Advanced extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /mi/verification/1/verify/advanced [operationId: advanced-silent-mobile-verification] */
    /**
     * Advanced Silent Mobile Verification
     *
     * Verify possession of the end user's mobile phone number with a mobile network operator's data connection.
     * If request body is supplied with additional data, the following can be done:
     * - SIM swap check before the mobile phone number verification
     * - Fallback SMS message if silent mobile verification fails
     *
     * API and URL may vary per country. Contact your Account Manager for implementation details.
     *
     * @deprecated
     */
    public static function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\SmvVerifyAdvancedRequestDto $payload): \InfobipSDK\Responses\Mi\Verification\Resource1\Verify\Advanced\Post
    {
        return self::client()->resource(\InfobipSDK\Resources\Mi\Verification\Resource1\Verify\Advanced::class)->post($payload);
    }
}
