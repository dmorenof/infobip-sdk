<?php

declare(strict_types=1);

namespace InfobipSDK\Camara\NumberVerification\V2\Dcql;

final class DevicePhoneNumber extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /camara/number-verification/v2/dcql/device-phone-number [operationId: create-number-retrieval-dcql-request] */
    /**
     * Number Retrieval DCQL Request
     *
     * Use this method to generate a credential request structure for the Android CredentialManager for the SIM-based (TS.43) number retrieval use case. The response must be passed to the device for SIM-based (TS.43) authentication.
     */
    public static function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\DcqlUseCaseRequestDto $payload): \InfobipSDK\Responses\Camara\NumberVerification\V2\Dcql\DevicePhoneNumber\Post\DcqlDevicePhoneNumberResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Camara\NumberVerification\V2\Dcql\DevicePhoneNumber::class)->post($payload);
    }

}
