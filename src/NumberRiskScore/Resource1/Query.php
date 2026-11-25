<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRiskScore\Resource1;

final class Query extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-risk-score/1/query [operationId: number-risk-score-query] */
    /**
     * Query phone number attributes
     *
     * Receives a phone number and user consent, and returns various attributes for the given number.
     * An empty object is returned for any attributes that have no information.
     * Only the attributes enabled for the account are returned.
     */
    public static function post(\InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\NrsApiRequest $payload): \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\NrsApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRiskScore\Resource1\Query::class)->post($payload);
    }

}
