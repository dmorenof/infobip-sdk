<?php

declare(strict_types=1);

namespace InfobipSDK\Camara\Location\V0;

final class Verify extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /camara/location/v0/verify [operationId: verify-device-location] */
    /**
     * Device Location Verification
     *
     * Use this method to verify whether the device location is within a requested area.
     * A circle with a center specified by the latitude and longitude, and a radius specified by the accuracy.
     *
     */
    public static function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraDeviceLocationVerifyRequestDto $payload): \InfobipSDK\Responses\Camara\Location\V0\Verify\Post
    {
        return self::client()->resource(\InfobipSDK\Resources\Camara\Location\V0\Verify::class)->post($payload);
    }

}
