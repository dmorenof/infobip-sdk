<?php

declare(strict_types=1);

namespace InfobipSDK\Camara\NumberRecycling\V02;

final class Check extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /camara/number-recycling/v0.2/check [operationId: number-recycling-check] */
    /**
     * Number Recycling Check
     *
     * Use this method to check whether the subscriber of the specified phone number has changed.
     *
     */
    public static function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraNumberRecyclingCheckRequestDto $payload): \InfobipSDK\Responses\Camara\NumberRecycling\V02\Check\Post
    {
        return self::client()->resource(\InfobipSDK\Resources\Camara\NumberRecycling\V02\Check::class)->post($payload);
    }
}
