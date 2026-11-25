<?php

declare(strict_types=1);

namespace InfobipSDK\Camara\KycMatch\V03;

final class MatchResource extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /camara/kyc-match/v0.3/match [operationId: know-your-customer-match] */
    /**
     * KYC Match
     *
     * Use this method to match customer data against Mobile Operators data.
     */
    public static function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraKycMatchRequestDto $payload): \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraKycMatchResponseDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Camara\KycMatch\V03\MatchResource::class)->post($payload);
    }

}
