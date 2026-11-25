<?php

declare(strict_types=1);

namespace InfobipSDK\Mi\Verification\Resource1\ZeroRated;

final class Init extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /mi/verification/1/zero-rated/init [operationId: initiate-zero-rated-silent-mobile-verification] */
    /**
     * Zero rated request initialization
     *
     * Initialise zero rated request.
     * This API endpoint is available only in Brazil. Please contact your sales for more details.
     *
     * @deprecated
     */
    public static function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\InitZeroRatedRequestDto $payload): \InfobipSDK\Responses\Mi\Verification\Resource1\ZeroRated\Init\Post
    {
        return self::client()->resource(\InfobipSDK\Resources\Mi\Verification\Resource1\ZeroRated\Init::class)->post($payload);
    }

}
