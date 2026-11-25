<?php

declare(strict_types=1);

namespace InfobipSDK\Mi\Verification\Resource1\Verify;

final class ZeroRated extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /mi/verification/1/verify/zero-rated [operationId: zero-rated-silent-mobile-verification] */
    /**
     * Zero rated request verify
     *
     * Verify possession of end-user's mobile phone number with the mobile network operator's data connection.
     * This API endpoint is available only in Brazil. Please contact your sales for more details.
     *
     * @deprecated
     */
    public static function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\VerifyZeroRatedRequestDto $payload): \InfobipSDK\Responses\Mi\Verification\Resource1\Verify\ZeroRated\Post
    {
        return self::client()->resource(\InfobipSDK\Resources\Mi\Verification\Resource1\Verify\ZeroRated::class)->post($payload);
    }

}
