<?php

declare(strict_types=1);

namespace InfobipSDK\Mi\Simswap\Resource1;

final class Check extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /mi/simswap/1/check [operationId: check-sim-swap] */
    /**
     * SIM Swap
     *
     * Verify if there was a SIM swap event for a given mobile phone number and period.<br/>
     * API and URL may vary per country. Contact your Account Manager for implementation details.
     */
    public static function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\SimSwapCheckRequestDto $payload): \InfobipSDK\Responses\Mi\Simswap\Resource1\Check\Post
    {
        return self::client()->resource(\InfobipSDK\Resources\Mi\Simswap\Resource1\Check::class)->post($payload);
    }

}
