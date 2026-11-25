<?php

declare(strict_types=1);

namespace InfobipSDK\Mi\NumberIntelligence\Resource1;

final class Query extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /mi/number-intelligence/1/query [operationId: query-number-intelligence] */
    /**
     * Number Intelligence
     *
     * Use this method to perform a query by a mobile phone number (MSISDN) for a given attribute name.
     * API and URL may vary per country. Contact your Account Manager for implementation details.
     */
    public static function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\NiQueryRequestDto $payload): \InfobipSDK\Responses\Mi\NumberIntelligence\Resource1\Query\Post
    {
        return self::client()->resource(\InfobipSDK\Resources\Mi\NumberIntelligence\Resource1\Query::class)->post($payload);
    }
}
