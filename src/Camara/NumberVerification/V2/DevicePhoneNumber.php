<?php

declare(strict_types=1);

namespace InfobipSDK\Camara\NumberVerification\V2;

final class DevicePhoneNumber extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /camara/number-verification/v2/device-phone-number [operationId: retrieve-number] */
    /**
     * Number Retrieval
     *
     * Use this method to retrieve the phone number associated with the device SIM.
     */
    public static function get(?\InfobipSDK\GetParams\Camara\NumberVerification\V2\DevicePhoneNumber $params = null): \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\DevicePhoneNumberResponseDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Camara\NumberVerification\V2\DevicePhoneNumber::class)->get($params);
    }

}
