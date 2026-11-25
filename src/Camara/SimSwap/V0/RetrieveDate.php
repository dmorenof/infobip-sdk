<?php

declare(strict_types=1);

namespace InfobipSDK\Camara\SimSwap\V0;

final class RetrieveDate extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /camara/sim-swap/v0/retrieve-date [operationId: sim-swap-retrieve-date] */
    /**
     * Retrieve SIM Swap date
     *
     * Use this method to retrieve the last date when the SIM Swap occurred for a given mobile phone number.
     */
    public static function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraSimSwapRetrieveDateRequestDto $payload): \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraSimSwapRetrieveDateResponseDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Camara\SimSwap\V0\RetrieveDate::class)->post($payload);
    }

}
