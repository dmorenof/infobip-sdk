<?php

declare(strict_types=1);

namespace InfobipSDK\Mi\NationalIdentityNumber\Resource1;

final class Check extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /mi/national-identity-number/1/check [operationId: check-national-identity-number] */
    /**
     * National Identity Number check
     *
     * Check if provided mobile phone number (MSISDN) belongs to user with provided national identity number.
     *
     */
    public static function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\NinCheckRequestDto $payload): \InfobipSDK\Responses\Mi\NationalIdentityNumber\Resource1\Check\Post
    {
        return self::client()->resource(\InfobipSDK\Resources\Mi\NationalIdentityNumber\Resource1\Check::class)->post($payload);
    }
}
