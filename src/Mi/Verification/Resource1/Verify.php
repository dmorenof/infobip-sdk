<?php

declare(strict_types=1);

namespace InfobipSDK\Mi\Verification\Resource1;

final class Verify extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /mi/verification/1/verify [operationId: silent-mobile-verification] */
    /**
     * Silent Mobile Verification
     *
     * Verify possession of end-user's mobile phone number with the mobile network operator's data connection.
     * API and URL may vary per country. Please contact your sales for more details.
     */
    public static function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\SmvVerifyRequestDto $payload): \InfobipSDK\Responses\Mi\Verification\Resource1\Verify\Post
    {
        return self::client()->resource(\InfobipSDK\Resources\Mi\Verification\Resource1\Verify::class)->post($payload);
    }
}
