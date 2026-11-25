<?php

declare(strict_types=1);

namespace InfobipSDK\Camara\SimSwap\V0;

final class Check extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /camara/sim-swap/v0/check [operationId: sim-swap-check] */
    /**
     * SIM Swap
     *
     * Use this method to verify if there was a SIM swap event for a given mobile phone number and period.
     */
    public static function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraSimSwapCheckRequestDto $payload): \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraSimSwapCheckResponseDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Camara\SimSwap\V0\Check::class)->post($payload);
    }
}
