<?php

declare(strict_types=1);

namespace InfobipSDK\Camara\NumberVerification\V0;

final class Verify extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /camara/number-verification/v0/verify [operationId: verify-number] */
    /**
     * Number Verification
     *
     * Use this method to verify possession of the end-user's mobile phone number with the mobile network operator's data connection.
     */
    public static function post(\InfobipSDK\PostParams\Camara\NumberVerification\V0\Verify $params): \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\NumberVerifyResponseDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Camara\NumberVerification\V0\Verify::class)->post($params);
    }

}
